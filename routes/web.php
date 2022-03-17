<?php

use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teams', [TeamController::class, 'index']);
Route::get('/teams/add', [TeamController::class, 'viewAddForm']);
Route::post('/teams/add', [TeamController::class, 'store']);
Route::get('/teams/edit/{id}', [TeamController::class, 'viewEditForm']);
Route::post('/teams/edit/{id}', [TeamController::class, 'edit']);
Route::get('/teams/delete/ask/{id}', [TeamController::class, 'deleteForm']);
Route::get('/teams/delete/{id}', [TeamController::class, 'delete']);
Route::get('/teams/search/{query}', [TeamController::class, 'search']);



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// TODO: button animation
// TODO: form - field - validation - error
// TODO: extra styling and stuff
