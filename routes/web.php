<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

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

Route::get('/', [EventController::class, 'index'])->name('home');
Route::get('/events/create', [EventController::class, 'create'])->name('event-create');
Route::get('/events/{id}', [EventController::class, 'show'])->name('event-show');
Route::post('/events', [EventController::class, 'store'])->name('event-store');
Route::post('/events/search', [EventController::class, 'search'])->name('event-search');