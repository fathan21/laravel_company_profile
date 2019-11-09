<?php


Route::group(['prefix' => '', 'namespace' => 'Front', 'middleware' => []], function () {
  Route::get('/', 'HomeController@index')->name('home');
  Route::get('/about', 'AboutController@index');
  Route::get('/projects', 'ProjectsController@index');
  Route::get('/services', 'ServicesController@index');
  Route::get('/blog', 'BlogController@index');
  Route::get('/contact', 'ContactController@index');
});


Route::redirect('/login', '/login');
Route::redirect('/home', '/admin');
Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');

    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');

    Route::resource('permissions', 'PermissionsController');

    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');

    Route::resource('roles', 'RolesController');

    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::any('users/listener', 'UsersController@listener');
    Route::resource('users', 'UsersController');
    
    Route::delete('products/destroy', 'ProductsController@massDestroy')->name('products.massDestroy');

    Route::resource('products', 'ProductsController');
});
