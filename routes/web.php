<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NormaluserController;
use App\Http\Controllers\AdminController;

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
    return view('home');
})->name('home');
Route::get('/user/login',[NormaluserController::class, 'login'])->name('user.login');
Route::post('/user/login',[NormaluserController::class, 'loginSubmit'])->name('user.login');
Route::get('/user/logout', [NormaluserController::class, 'logout'])->name('user.logout');
Route::get('/user/registration',[NormaluserController::class, 'registration'])->name('user.registration');
Route::post('/user/registration',[NormaluserController::class, 'register'])->name('user.registration');
Route::get('/user/dashboard',[NormaluserController::class, 'dashboard'])->name('user.dashboard')->middleware('UserAuthorization');
Route::get('/user/profile',[NormaluserController::class, 'profile'])->name('user.profile')->middleware('UserAuthorization');
Route::get('/user/edit',[NormaluserController::class, 'edit'])->name('user.edit')->middleware('UserAuthorization');
Route::post('/user/edit',[NormaluserController::class, 'editSubmit'])->name('user.edit')->middleware('UserAuthorization');

Route::get('/admin/login',[AdminController::class, 'login'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'loginSubmit'])->name('admin.login');
Route::get('/admin/logout',[AdminController::class, 'logout'])->name('admin.logout');
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard')->middleware('AdminAuthorization');
Route::get('/admin/profile', [AdminController::class, 'profile'])->name('admin.profile')->middleware('AdminAuthorization');
Route::get('/admin/edit',[AdminController::class, 'edit'])->name('admin.edit')->middleware('AdminAuthorization');
Route::post('/admin/edit',[AdminController::class, 'editSubmit'])->name('admin.edit')->middleware('AdminAuthorization');
Route::get('/admin/user/details/{id}', [AdminController::class,'userdetails'])->name('admin.userdetails')->middleware('AdminAuthorization');
Route::get('/admin/user/edit/{id}', [AdminController::class,'editUser'])->name('admin.edituser')->middleware('AdminAuthorization');
Route::post('/admin/user/edit/{id}', [AdminController::class,'editUserSubmit'])->name('admin.edituser')->middleware('AdminAuthorization');
Route::get('/admin/user/delete/{id}', [AdminController::class,'deleteUser'])->name('admin.deleteuser')->middleware('AdminAuthorization');