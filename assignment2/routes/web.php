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

use App\Resta;
use App\Menu;
use App\Pur;
use App\User;

Route::resource('user', 'UserController');
Route::resource('resta', 'RestaController');
Route::resource('menu', 'MenuController');
Route::resource('purchase', 'PurchaseController');

Route::get('/', function () {

    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('auth.login');

Route::get('/t', function () {
    // $resta = new Resta;
    // $resta->name = 'ipod';
    // $resta->save();
    // // $id = $resta->id;
    // // $resta = Resta::create(array('name'=>'playstation'));
    // $restas = App\Menu::find(2)->restas;
    // dd($restas);
    // $p = 1;
    return view('test');
    $resta = new Resta;
    $resta->name = 'ipod';
    $resta->save();
    // $id = $resta->id;
    // $resta = Resta::create(array('name'=>'playstation'));
    $restas = App\Menu::find(2)->restas;
    dd($restas);
});