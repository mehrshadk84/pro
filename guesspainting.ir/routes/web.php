<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Frontend\UserController;
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
// Home Page
Route::get('/', [UserController::class, 'index'])->name('home');
Route::get('/dashboard/play', [UserController::class, 'game'])->name('game.play');

// Admin
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [\App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin');
    Route::get('/addwords', [\App\Http\Controllers\Admin\UserController::class, 'addwords'])->name('admin.addwords');
    Route::post('/addwords', [\App\Http\Controllers\Admin\UserController::class, 'store'])->name('admin.addwords.store');
    Route::get('/words', [\App\Http\Controllers\Admin\UserController::class, 'words'])->name('admin.words');
    Route::get('/words/delete/{id}', [\App\Http\Controllers\Admin\UserController::class, 'delete'])->name('admin.words.delete');
    Route::get('/words/edit/{id}', [\App\Http\Controllers\Admin\UserController::class, 'edit'])->name('admin.words.edit');
    Route::post('/words/edit/{id}', [\App\Http\Controllers\Admin\UserController::class, 'update'])->name('admin.words.update');
    Route::get('/games' , [\App\Http\controllers\Admin\UserController::class, 'games'])->name('admin.games');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
