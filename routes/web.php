<?php

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
    return view('welcome');
});
Route::get('/user_registershow','usercontroller@register');
Route::get('/users',function()
{
      return view('users');
});

Route::get('/adminlogin','admincontroller@login')->middleware('hello');
Route::get('/adminpanel','Hellocontroller@admin');

Route::get('/login_users','usercontroller@login_user');
Route::post('/validate_user','usercontroller@validate_user');

Route::post('/exam','usercontroller@exam');

Route::get('/home', 'HomeController@index')->name('home');

Route::POST('/user_registersubmit','usercontroller@index');
 
Route::get('/page',function(){
	return view('admin-panel.form_validation');
});
 
Route::get('/listusers', 'admincontroller@showusers');
Route::get('/add_subject','admincontroller@add_subject');
Route::get('/add_question','admincontroller@add_question');
Route::get('/Add_test','admincontroller@Add_test');
Route::post('/ins_subject','admincontroller@insert_subject');
Route::post('/insert_testname','admincontroller@insert_testname');
Route::post('/ins_question','admincontroller@ins_question');
Route::post('/ins_ans','admincontroller@ins_ans');
Route::get('/test_list','admincontroller@test_list');
Route::get('/acc_manage','admincontroller@acc_manage');
Route::get('/user_account','admincontroller@user_acc');
Route::get('/nextq','admincontroller@nextq');
Route::get('/invoice','admincontroller@invoice');