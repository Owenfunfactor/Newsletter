<?php

use App\Http\Controllers\AbonneController;
use App\Http\Controllers\EmailSenderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListAbonneController;
use App\Http\Controllers\NewsController;
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



Route::get('/',[HomeController::class,'index'])->name('home');

Route::resource('/formulaire', AbonneController::class)->except(['show','edit','update','delete']);

Route::resource('/admin/news', NewsController::class);

Route::get('/list/{news}', [ListAbonneController::class,'AllSubscriber'])->name('admin.subscriber')->where([
    'news' => '[0-9]+'
]);



Route::post('/sendmail/{news}/{abonné}', [EmailSenderController::class,'mailsend'])->name('emailsender')->where([
    'news' => '[0-9]+',
    'abonné' => '[0-9]+'
]);




