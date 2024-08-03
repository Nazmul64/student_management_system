<?php declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\Setup\StudentController;
use App\Http\Controllers\Backend\FrontenController;
// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

  Route::get('/', [FrontenController::class, 'loginpage'])->name('loginpage');

  Route::get('/home', [HomeController::class, 'backendlayoutshome'])->name('backendlayoutshome');

Route::prefix('users')->group(function () {
   Route::get('/view', [UserController::class, 'view'])->name('user.view');
   Route::get('/add', [UserController::class, 'add'])->name('user.add');
   Route::post('/store', [UserController::class, 'store'])->name('user.store');
   Route::get('/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
   Route::post('/user.update/{id}', [UserController::class, 'update'])->name('user.update');
   Route::get('/user/delete/{id}', [UserController::class, 'delete'])->name('user.delete');
});

Route::prefix('profile')->group(function () {
   Route::get('/view', [ProfileController::class, 'view'])->name('profile.view');
   Route::get('/profile.edit/{id}', [ProfileController::class, 'edit'])->name('profile.edit');
   Route::post('/profile.update/{id}', [ProfileController::class, 'edit'])->name('profile.update');
   Route::get('/profile/password/view/', [ProfileController::class, 'passwordview'])->name('profile.passwordview');
   Route::POST('/profile/password/update', [ProfileController::class, 'passwordupdate'])->name('profile.passwordupdate');
});
Route::prefix('setups')->group(function () {
   Route::get('/student/class/view', [StudentController::class, 'view'])->name('stups.view');
   Route::get('/student/class/add', [StudentController::class, 'add'])->name('stups.add');
   Route::post('/student/class/store', [StudentController::class, 'store'])->name('stups.store');
   Route::get('/student/class/edit/{id}', [StudentController::class, 'edit'])->name('stups.edit');
   Route::post('/student/class/update/{id}', [StudentController::class, 'update'])->name('stups.update');
   Route::get('/student/class/delete/{id}', [StudentController::class, 'delete'])->name('stups.delete');
});

