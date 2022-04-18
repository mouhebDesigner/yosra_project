<?php

use App\Models\Sujet;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SujetController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EtudiantController;

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
Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resources([
            'users' => UserController::class,
            'sujets' => SujetController::class,
            'etudiants' => EtudiantController::class
        ]);
    });
});
Route::get('forums', function(){
    $forums = Sujet::all();
    return view('forums.index', compact('forums'));
});
Route::get('profile', [ProfileController::class, 'index'])->middleware('auth');
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
