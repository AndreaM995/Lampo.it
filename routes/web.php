<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[PublicController::class,'homepage'])->name('homepage');
Route::get('/category/{category}',[PublicController::class,'show'])->name('categoryShow');

Route::get('/Announcement/create',[AnnouncementController::class, 'create'])->middleware('auth')->name('announcement.create');
Route::get('/Announcement/show/{announcement}',[AnnouncementController::class, 'show'])->name('announcement.show');
Route::get('/Announcement/index',[AnnouncementController::class,'index'])->name('announcement.index');

