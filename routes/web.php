<?php
use  App\Page;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/admin', ['uses' => 'Admin\AdminController@index', 'as'=> 'admin']);

Auth::routes();


Route::get('page/{id}',function($id){

    $data = Page::where('id', '=', $id)->firstOrFail();

    return view('pages',['page' =>  $data]);

});


Route::group(['prefix' => 'admin'], function () {

    Route::match(['get','post'],'put_page', ['uses' => 'Admin\AdminController@put_page', 'as' => 'put_pgae']);

});

