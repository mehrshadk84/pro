<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\HelloController;
use Illuminate\Routing\RouteGroup;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FileController;
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
Route::get('/hello/{id}', [\App\Http\Controllers\Auth\HelloController::class, 'index']);
Route::get('/admin', function () {
    return view('admin.dashbord.index');
});
// Route::get('/admin/user');
// Route::get('/admin/files');
// Route::get('/admin/login');
// Route::get('/admin/user/create');
// beja inke admin ro dar aval harkodam benevisim mitonim az group estefade konim:
// Route::group(['prefix' => 'admin'], function () {
//     route::get('/user');
//     route::get('/fiels');
//     route::get('/login');
// });
Route::group(['prefix' => 'admin'], function () {
    //Users routs
    Route::get('/users', [\App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin.users.list');
    Route::get('/users/create', [\App\Http\Controllers\Admin\UserController::class, 'create'])->name('admin.users.create');
    Route::get('', [\App\Http\Controllers\Admin\UserController::class, 'admin'])->name('admin.users');
    Route::post('/users/create', [\App\Http\Controllers\Admin\UserController::class, 'store'])->name('admin.users.store');
    Route::get('/users/delete/{id}', [\App\Http\Controllers\Admin\UserController::class, 'delete'])->name('admin.users.delete');
    Route::get('/users/edit/{id}', [\App\Http\Controllers\Admin\UserController::class, 'edit'])->name('admin.users.edit');
    Route::post('/users/edit/{id}', [\App\Http\Controllers\Admin\UserController::class, 'update'])->name('admin.users.update');
    // files routs
    Route::get('/files', [\App\Http\Controllers\Admin\FileController::class, 'index'])->name('admin.files.list');
});
