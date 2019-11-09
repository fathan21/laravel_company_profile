<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Datatables;
use DB;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Role;
use App\User;

class UsersController extends Controller
{

    function __construct()
    {
        $this->_model = new User;
    }
    public function index()
    {
        abort_unless(\Gate::allows('user_access'), 403);

        $users = User::all();

        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('user_create'), 403);

        $roles = Role::all()->pluck('title', 'id');

        return view('admin.users.create', compact('roles'));
    }

    public function store(StoreUserRequest $request)
    {
        abort_unless(\Gate::allows('user_create'), 403);

        $user = User::create($request->all());
        $user->roles()->sync($request->input('roles', []));

        return redirect()->route('admin.users.index');
    }

    public function edit(User $user)
    {
        abort_unless(\Gate::allows('user_edit'), 403);

        $roles = Role::all()->pluck('title', 'id');

        $user->load('roles');

        return view('admin.users.edit', compact('roles', 'user'));
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        abort_unless(\Gate::allows('user_edit'), 403);

        $user->update($request->all());
        $user->roles()->sync($request->input('roles', []));

        return redirect()->route('admin.users.index');
    }   

    public function show(User $user)
    {
        abort_unless(\Gate::allows('user_show'), 403);

        $user->load('roles');

        return view('admin.users.show', compact('user'));
    }

    public function destroy(User $user)
    {
        abort_unless(\Gate::allows('user_delete'), 403);

        $user->delete();

        return back();
    }

    public function massDestroy(MassDestroyUserRequest $request)
    {
        User::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }


    public function listener(Request $request)
    {
        
        $search  = $request->input('search.value');
        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $request->input('order');

        $count_total =0;

        $count_filter =0;
        $items = $this->_model->select(['id','name']);

        print_r($items);die;
        if($order){
            foreach ($order as $o) {
                if(isset($columns[ $o[ 'column' ] ])) {
                    $items = $items->orderBy($columns[ $o[ 'column' ] ][ 'name' ], $o[ 'dir' ]);
                }
            }
        }
        if($start){
            $items = $items->start($start)->limit($limit);
        }

        return Datatables::of($items)
                         ->with([
                             "recordsTotal"    => $count_total,
                             "recordsFiltered" => $count_filter,
                         ])
                         ->make(TRUE);
    }
}
