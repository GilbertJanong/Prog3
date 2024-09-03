<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Coolinercontroller;
use App\Models\Coolinermodel;

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
});

Route::get('/index', [Coolinercontroller::class, 'index']);

Route::post('/cooliner/store', [Coolinercontroller::class, 'store']);
Route::get('/index/create', 'Coolinercontroller@create');
Route::get('/cooliners/edit{id}', [CoolinerController::class, 'edit'])->name('cooliner.edit');
Route::post('/cooliners/edit{id}', [CoolinerController::class, 'update'])->name('cooliner.update');