<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebHomeController;
use App\Http\Controllers\WebAnimeListController;
use App\Http\Controllers\WebLoginController;
use App\Http\Controllers\WebMangaListController;
use App\Http\Controllers\WebBioController;
use App\Http\Controllers\WebAdminController;
use App\Http\Controllers\WebRegisterController;
use App\Http\Controllers\WebDashboardController;
use App\Http\Controllers\WebDashAnimeController;
use App\Http\Controllers\WebDashMangaController;
use App\Http\Controllers\WebDashProfileController;
use App\Http\Controllers\WebInsertAnimeController;
use App\Http\Controllers\WebInsertMangaController;
use App\Http\Controllers\WebInsertProfileController;
use App\Http\Controllers\WebEditAnimeController;
use App\Http\Controllers\WebEditMangaController;
use App\Http\Controllers\WebEditProfileController;

Route::get('/', [WebHomeController::class,'index']);
Route::get('/biodata', [WebBioController::class,'index']);
Route::get('/anime', [WebAnimeListController::class,'index']);
Route::get('/manga', [WebMangaListController::class,'index']);
Route::get('/login', [WebLoginController::class,'index']);
Route::post('/login', [WebLoginController::class,'authenticate']);
Route::get('/admin', [WebAdminController::class,'index']);
Route::get('/register', [WebRegisterController::class,'index']);
Route::post('/register', [WebRegisterController::class,'store']);
Route::get('/dashboard', [WebDashboardController::class,'index']);
Route::get('/dashAnime', [WebDashAnimeController::class,'index']);
Route::post('/dashAnime', [WebDashAnimeController::class,'store']);
Route::resource('dashAnime', WebDashAnimeController::class);
Route::get('/dashManga', [WebDashMangaController::class,'index']);
Route::post('/dashManga', [WebDashMangaController::class,'store']);
Route::resource('dashManga', WebDashMangaController::class);
Route::get('/dashProfile', [WebDashProfileController::class,'index']);
Route::post('/dashProfile', [WebDashProfileController::class,'store']);
Route::resource('dashProfile', WebDashProfileController::class);
Route::get('/insertAnime', [WebInsertAnimeController::class,'index']);
Route::get('/insertManga', [WebInsertMangaController::class,'index']);
Route::get('/insertProfile', [WebInsertProfileController::class,'index']);
Route::get('/editAnime/{id}', [WebEditAnimeController::class,'index']);
Route::get('/editManga/{id}', [WebEditMangaController::class,'index']);
Route::get('/editProfile/{id}', [WebEditProfileController::class,'index']);