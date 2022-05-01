<?php

use App\Models\Sujet;
use App\Models\Categorie;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SujetController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\CategorieController;
use App\Http\Controllers\EventController as EventControllerFront;

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
            'etudiants' => EtudiantController::class,
            'events' => EventController::class,
            'categories' => CategorieController::class
        ]);
    });
});
Route::get('events', [EventControllerFront::class, 'index'])->name('events.index');
Route::get('forums', function(){
    $forums = Sujet::all();
    return view('forums.index', compact('forums'));
})->name('forums.index');
Route::get('forums/create', function(){
    $forums = Sujet::all();
    return view('forums.create', compact('forums'));
})->name('forums.create');
Route::get('categorie/{id}/events', function($id){
    $events = Categorie::find($id)->events()->get();
    return view('events.index', compact('events'));
});
Route::get('profile', [ProfileController::class, 'index'])->middleware('auth');
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
