<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LayoutController;

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


//Login
Route::get('/', [LayoutController::class, 'index'])->middleware('auth');
Route::get('/home', [LayoutController::class, 'index'])->middleware('auth');
// Route::get('login',[LoginController::class, 'index'])->name('login');

Route::controller(LoginController::class)->group(function(){
    Route::get('login', 'index')->name('login');
    Route::post('login/proses', 'proses');
    Route::get('logout', 'logout');
});

//Middleware
Route::group(['middleware' => ['auth']], function()
{
    // Bagian Super Admin 
    Route::group(['middleware' => ['CekUserLogin:1']], function()
    {
        Route::resource('about', LayoutController::class);
    });

    //Bagian Admin
    Route::group(['middleware' => ['CekUserLogin:2']], function()
    {
        
    });

    //Bagian Karyawan
    Route::group(['middleware' => ['CekUserLogin:3']], function()
    {

    });
});