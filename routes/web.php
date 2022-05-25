<?php

use App\Models\Sujet;
use App\Models\Document;
use App\Models\Categorie;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\SujetController;
use App\Http\Controllers\DemandeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DocumentController;
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
            'categories' => CategorieController::class, 
            'documents' => DocumentController::class,
            'demandes' => DemandeController::class
        ]);
        // Route::get('documents', [DocumentController::class, 'index'])->name('documents.index');
        // Route::post('documents', [DocumentController::class, 'store'])->name('documents.store');

    });
});
Route::get('events', [EventControllerFront::class, 'index'])->name('events.index');
Route::get('formations', [FormationControllerFront::class, 'index'])->name('formations.index');
Route::get('actualites', [ActualiteControllerFront::class, 'index'])->name('actualites.index');
Route::get('formations/{formation}', [FormationControllerFront::class, 'show'])->name('formations.show');
Route::get('actualites/{actualite}', [ActualiteControllerFront::class, 'show'])->name('actualites.show');
Route::get('events/{event}', [EventControllerFront::class, 'show'])->name('events.show');
Route::resource('forums', ForumController::class)->except('create');
    Route::resource('documents', DocumentController::class);
// Route::get('documents/create', [DocumentController::class, 'create'])->name('documents.create');
// Route::get('documents', [DocumentController::class, 'index'])->name('documents.index');
// Route::get('documents/create', [DocumentController::class, 'create'])->name('documents.create');
// Route::post('documents', [DocumentController::class, 'store'])->name('documents.store');
Route::get('forum/create', [ForumController::class, 'create'])->middleware('auth')->name('forums.create');
Route::get('forum/search', [ForumController::class, 'search'])->name('forum.search');
Route::resource('commentaires', CommentaireController::class);
Route::get('categorie/{id}/events', function($id){
    $events = Categorie::find($id)->events()->get();
    return view('events.index', compact('events'));
});
Route::get('categorie/{id}/formations', function($id){
    $formations = Categorie::find($id)->formations()->get();
    return view('formations.index', compact('formations'));
});
Route::get('categorie/{id}/actualites', function($id){
    $actualites = Categorie::find($id)->actualites()->get();
    return view('actualites.index', compact('actualites'));
});
Route::get('profile', [ProfileController::class, 'index'])->middleware('auth');
Route::get('profile/edit', [ProfileController::class, 'edit'])->middleware('auth')->name('profile.edit');
Route::put('profile', [ProfileController::class, 'update'])->middleware('auth')->name('profile.update');

Route::get('/', function () {
    return view('welcome');
});

Route::get('downloads/{id}', function($id){
    $document = Document::find($id);
    $filepath = public_path()."/".$document->file;
    return Response::download($filepath);
})->name('download.file');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
