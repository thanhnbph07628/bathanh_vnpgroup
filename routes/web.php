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

Route::group(['perfix'=>'tuyendung.kienlongbank.com'], function(){
    Route::get('tuyendung.kienlongbank.com', 'ControllerBase@index')->name('index');
    Route::get('vi-tri-tuyen-dung', 'ControllerBase@recruitment')->name('recruitment');
    Route::get('nhan-vien-tin-dung-ben-tre', 'ControllerBase@recruitment_detail')->name('recruitment_detail');
    Route::redirect('/','tuyendung.kienlongbank.com'); 
});
