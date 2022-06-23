<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\SystemuserController;
use App\Http\Controllers\LoginController;

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

Route::get('/home', [Homecontroller::class,'home'])->name('home');

Route::post('/home',[Homecontroller::class,'createSubmit'])->name('home');


Route::get('/', [Homecontroller::class,'homepage'])->name('homepage');

//homepage
Route::get('/aboutus', [Homecontroller::class,'aboutus'])->name('aboutus');
Route::get('/workbased', [Homecontroller::class,'workbased'])->name('workbased');
Route::get('/ourwork', [Homecontroller::class,'ourwork'])->name('ourwork');
Route::get('/contact', [Homecontroller::class,'contact'])->name('contact');

Route::post('/',[Homecontroller::class,'createSubmitBar'])->name('navbar');


//userlist

Route::get('/usermessage', [Homecontroller::class,'usermessage'])->name('usermessage');



//login
Route::get('/login',[LoginController::class,'Login'])->name('login');
Route::post('/login',[LoginController::class,'loginSubmit'])->name('login');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

//admin dash
Route::get('/admin/admindash', [HomeController::class,'adminDash'])->name('adminDash')->middleware('ValidAdmin');





