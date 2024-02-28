<?php

use App\Http\Controllers\AbonneController;
use App\Http\Controllers\EmailSenderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListAbonneController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
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

Route::resource('/admin/news', NewsController::class)->middleware('auth');

Route::get('/list/{news}', [ListAbonneController::class,'AllSubscriber'])->name('admin.subscriber')->where([
    'news' => '[0-9]+'
]);



Route::post('/sendmail/{news}/{abonné}', [EmailSenderController::class,'mailsend'])->name('emailsender')->where([
    'news' => '[0-9]+',
    'abonné' => '[0-9]+'
]);

Route::post('/sendmailAll/{news}', [EmailSenderController::class,'mailsendAll'])->name('emailsenderAll')->where([
    'news' => '[0-9]+',
]);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
