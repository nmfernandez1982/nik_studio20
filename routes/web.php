<?php

use App\Http\Controllers\MailingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MailsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

#crud Mail
Route::get('/adminMails', [MailsController::class, 'index'])->name('adminMails');
Route::get('/agregarMail', [ MailsController::class, 'create' ]);
Route::post('/agregarMail', [ MailsController::class, 'store' ]);
Route::get('/eliminarMail/{id}', [MailsController::class, 'destroy']);
Route::get('/modificarMail/{id}', [ MailsController::class, 'edit' ]);
Route::patch('/modificarMail', [ MailsController::class, 'update' ]);
#crud Mailing
Route::get('/adminMailing', [MailingController::class, 'index'])->name('adminMailing');
//Route::get('/enviarMail/{id}', [MailingController::class, 'enviarMail']);
Route::post('/enviar-mails', [MailingController::class, 'enviarMails'])->name('enviar.mails');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
