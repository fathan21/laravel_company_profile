<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectsController extends Controller
{
    public function index()
    {
      $data = array();

      return view('front.projects.projects', $data);
    }
}
