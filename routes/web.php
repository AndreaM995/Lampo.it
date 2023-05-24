<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;
use App\Http\Controllers\AnnouncementController;

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


Route::get('/profile',[UserController::class,'profile'])->middleware('auth')->name('user.profile');
Route::get('/Announcement/show/profile/{announcement}', [AnnouncementController::class, 'showProfile'])->name('announcement.profile');


// rotte revisore
Route::get('/revisor/home', [RevisorController::class, 'index'])->name('revisor.index');
Route::patch('/accetta/annuncio/{announcement}', [RevisorController::class, 'acceptAnnouncement'])->name('revisor.accept_announcement');
Route::patch('/rifiuta/annuncio/{announcement}', [RevisorController::class, 'rejectAnnouncement'])->name('revisor.reject_announcement');
