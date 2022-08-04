<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\SystemuserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ApplyController;

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




//admin notice's
Route::get('/admin/noticeadd',[NoticeController::class,'notice'])->name('admin.noticeadd');
Route::post('/admin/noticeadd',[NoticeController::class,'noticeAdd'])->name('admin.noticeadd');

Route::get('/admin/noticelist',[NoticeController::class,'list'])->name('admin.noticelist');
Route::get('/admin/noticeaddedit/{id}/{title}',[NoticeController::class,'edit']);
Route::post('/admin/noticeaddedit',[NoticeController::class,'editSubmit'])->name('admin.noticeaddedit');
Route::get('/admin/delete/{id}/{title}',[NoticeController::class,'delete']);



//Career
Route::get('/career/jobadd',[CareerController::class,'jobadd'])->name('career.jobadd');
Route::post('/career/jobadd',[CareerController::class,'jobaddsubmit'])->name('career.jobadd');
Route::get('/career/joblist',[CareerController::class,'list'])->name('career.joblist');
Route::get('/career/jobedit/{id}/{title}',[CareerController::class,'edit']);
Route::post('/career/jobedit',[CareerController::class,'editSubmit'])->name('career.jobedit');
Route::get('/career/delete/{id}/{title}',[CareerController::class,'delete']);

//Apply
Route::get('/career/apply/{title}',[ApplyController::class,'apply'])->name('career.apply');
Route::post('/career/apply',[ApplyController::class,'applysubmit'])->name('career.apply');

Route::get('/career/applylist',[ApplyController::class,'list'])->name('career.applylist');