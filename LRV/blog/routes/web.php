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
Route::get('/duy', function (){
    return 'Hello World';
});
Route::get('/login', function (){
    return view('login');
});
Route::post('/afterlogin', function(Illuminate\Http\Request $request){
    if ($request->username == 'admin'&&$request->password == 'admin'){
        return view('welcome_admin');
    }
    return view('login_error');

});