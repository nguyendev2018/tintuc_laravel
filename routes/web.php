<?php

use Illuminate\Support\Facades\Route;

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
Route::group(['middleware' => ['auth','Quantri']], function () {
    Route::resource('/theloai', 'TheloaiController');
    Route::resource('/loaitin', 'LoaitinController');
    Route::resource('/tintuc', 'TintucController');
    Route::resource('/ykien', 'YkienController');
    Route::resource('/user', 'UserController');
    Route::get('user/{id}/{idgroup}','UserController@updateidgroup')->name('updateidgroup');
    Route::get('/ql', function () {
        return view('quantri/quanli/index');
    });
    Auth::routes();
    Route::get('/layloaitintrong1theloai/{idTL}', function($idTL){  
        $kq = DB::select("SELECT idLT, Ten FROM loaitin WHERE idTL=$idTL");
        foreach($kq as $row)  
        echo "<option value={$row->idLT}> {$row->Ten} </option>";
});
});
Route::get('/', function () {
    return view('index');
});
Route::get('/layloaitintrong1theloai/{idTL}', function($idTL){
    $kq = DB::select("SELECT idLT, Ten FROM loaitin WHERE idTL=$idTL");
    foreach($kq as $row)
    echo "<option value={$row->idLT} -> {$row->Ten} </option>";
});
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('login/', '\App\Http\Controllers\Auth\LoginController@login');

Route::get('ttl/{id}','TinController@tintrongloai');
Route::get('tintheotheloai/{id}', 'TinController@tintheotheloai');
Route::get('tin/{id}', 'TinController@chitiettin')->name('chitiettin'); 
// là một cái route dẫn đến search
Route::get('lienhe/', 'TinController@lienhe');
Route::post('lienhe/gui', 'GuimailController@guimaillienhe');
Route::post('ykien/{id}', 'TinController@ykien');
Route::get('/search','TinController@search');
Route::get('baocao/','TinController@baocao');

Auth::routes();

