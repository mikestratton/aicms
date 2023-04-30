<?php

use App\Http\Controllers\AIController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubjectController;
use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('post.welcome');
//});

Route::get('/', [PostController::class, 'welcome']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('subject', SubjectController::class)->middleware('auth');
Route::resource('category', CategoryController::class)->middleware('auth');
Route::resource('post', PostController::class)->middleware('auth');
Route::resource('ai', AIController::class)->middleware('auth');
//Route::get('/post', [PostController::class, 'index'])->name('post.index');
//Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
//Route::put('/post/create', [PostController::class, 'store'])->name('post.store');

Route::get('/test-api', [AIController::class, 'TestAPI']);
Route::get('/test-api-hard-coded', [AIController::class, 'TestAPIHardCodedResponse']);

Route::get('/api-test-create', [AIController::class, 'ApiTestCreate']);
Route::post('/api-test-response', [AIController::class, 'TestAPIWithInput'])->name('input.test');



require __DIR__.'/auth.php';
