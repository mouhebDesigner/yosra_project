<?php

use App\Models\Sujet;
use App\Models\Categorie;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\SujetController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\ActualiteControllerFront;
use App\Http\Controllers\FormationControllerFront;
use App\Http\Controllers\Admin\ActualiteController;
use App\Http\Controllers\Admin\CategorieController;
use App\Http\Controllers\Admin\FormationController;
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
            'formations' => FormationController::class,
            'actualites' => ActualiteController::class,
            'categories' => CategorieController::class
        ]);
    });
});
Route::get('events', [EventControllerFront::class, 'index'])->name('events.index');
Route::get('formations', [FormationControllerFront::class, 'index'])->name('formations.index');
Route::get('actualites', [ActualiteControllerFront::class, 'index'])->name('actualites.index');
Route::get('formations/{formation}', [FormationControllerFront::class, 'show'])->name('formations.show');
Route::get('actualites/{actualite}', [ActualiteControllerFront::class, 'show'])->name('actualites.show');
Route::get('events/{event}', [EventControllerFront::class, 'show'])->name('events.show');
Route::resource('forums', ForumController::class)->except('create');
Route::get('forum/create', [ForumController::class, 'create'])->middleware('auth')->name('forums.create');
Route::resource('commentaires', CommentaireController::class);
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
