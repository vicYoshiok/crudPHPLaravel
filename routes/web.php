<?php
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
/*
Route::get('/', function () {
    return view('welcome');
});*/

Route::view('/','welcome') -> name('home');
Route::view('contacto','contact') -> name('contacto');

//Route::view('blog','blog', ['posts' => $posts]) -> name('blog');
//el orden de las rutas importa siempre hayque crearlas en el orden en el que van a aparecer en el controlador :C que estupidez
Route::get('/blog',[PostController::class, 'index']) ->name('posts.index');
//ruta del post de detalles
//ruta del formulario
Route::get('/blog/create',[PostController::class, 'create']) ->name('posts.create');
Route::post('blog',[PostController::class, 'store']) ->name('posts.store');

Route::get('/blog/{idPost}',[PostController::class,'show'])->name('posts.show');
//llaves simples para definir el parametro de ruta 
Route::get('/blog/{idPost}/edit',[PostController::class,'edit'])->name('posts.edit');
//ruta para actualizar
Route::patch('/blog/{idPost}',[PostController::class,'update'])->name('posts.update');
//elimar post 
Route::delete('/blog/{idPost}',[PostController::class,'destroy'])->name('posts.destroy');




//rutas que no se tocan
Route::view('nosotros','about') -> name('contact');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
