<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::get('/', function () {
    return view('welcome');
})->name('home');



// Route::get('/pattern', function () {
//     return view('patterns.builder.index');
// });


Route::get('/builder', [ContactController::class, 'index'])->name('builder.index');
Route::get('/builder/create', [ContactController::class, 'create'])->name('builder.create');
Route::post('/builder/store', [ContactController::class, 'store'])->name('builder.store');
Route::get('/builder/{id}/edit', [ContactController::class, 'edit'])->name('builder.edit');
Route::get('/contacts/{id}', [ContactController::class, 'show'])->name('contacts.show');
Route::put('/builder/{id}/update', [ContactController::class, 'update'])->name('builder.update');
Route::delete('/builder/{id}/delete', [ContactController::class, 'destroy'])->name('builder.delete');

