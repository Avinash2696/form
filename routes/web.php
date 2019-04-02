<?php
use App\tbl_pages;
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

/*Route::get('/', function () {
    return view('welcome');
});*/



//Route::post('/','formController@store');
Route::delete('/info/{id}','formController@destroy');


Route::get('/update/{id}','formController@edit');

Route::get('/{id}','formController@update');

Auth::routes();

Route::get('/logout',function(){
	Auth::logout();
	return redirect('/');
});

Route::get('/auth/login', array(
  'uses' => 'HomeController@showLogin'
));







Route::get('/',function(){
		$categories = tbl_pages::with('children')->where('parent_id','=',0)->get();
		return view('menu',['categories'=>$categories]);
});