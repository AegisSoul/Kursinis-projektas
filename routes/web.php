<?php

use App\Http\Controllers\TeamController;
use App\Models\Team;
use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;


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
    return view('auth.login');
});

Route::get('/teams', [TeamController::class, 'index']);
Route::get('/teams/add', [TeamController::class, 'viewAddForm']);
Route::post('/teams/add', [TeamController::class, 'store']);
Route::get('/teams/edit/{player}', [TeamController::class, 'viewEditForm']);
Route::post('/teams/edit/{player}', [TeamController::class, 'edit']);
Route::get('/teams/delete/ask/{player}', [TeamController::class, 'deleteForm']);
Route::get('/teams/delete/{player}', [TeamController::class, 'delete']);
Route::get('/teams/search', [TeamController::class, 'search']);

Route::get('/team/{team}', [TeamController::class, 'viewTeam']);
// Route::get('/wolves', [TeamController::class, 'viewWolves']);
// Route::get('/gargzdai', [TeamController::class, 'viewGargzdai']);
// Route::get('/jonava', [TeamController::class, 'viewJonava']);
// Route::get('/zalgiris', [TeamController::class, 'viewZalgiris']);
// Route::get('/nevezis', [TeamController::class, 'viewNevezis']);
// Route::get('/neptunas', [TeamController::class, 'viewNeptunas']);
// Route::get('/lietkabelis', [TeamController::class, 'viewLietkabelis']);
// Route::get('/pienozvaigzdes', [TeamController::class, 'viewPienozvaigzdes']);
// Route::get('/labasgas', [TeamController::class, 'viewLabasgas']);
// Route::get('/siauliai', [TeamController::class, 'viewSiauliai']);
// Route::get('/juventus', [TeamController::class, 'viewJuventus']);
// Route::get('/rytas', [TeamController::class, 'viewRytas']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $teams = Team::all();
    return view('dashboard', compact('teams'));
})->name('dashboard');


