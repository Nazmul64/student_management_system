<?php declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\Setup\StudentController;
use App\Http\Controllers\Backend\FrontenController;
use App\Http\Controllers\Backend\Setup\YearController;
use App\Http\Controllers\Backend\GroupController;
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
   // Student Class
   Route::get('/student/class/view', [StudentController::class, 'view'])->name('stups.view');
   Route::get('/student/class/add', [StudentController::class, 'add'])->name('stups.add');
   Route::post('/student/class/store', [StudentController::class, 'store'])->name('stups.store');
   Route::get('/student/class/edit/{id}', [StudentController::class, 'edit'])->name('stups.edit');
   Route::post('/student/class/update/{id}', [StudentController::class, 'update'])->name('stups.update');
   Route::get('/student/class/delete/{id}', [StudentController::class, 'delete'])->name('stups.delete');

   // Student Session
   Route::get('/student/year/view', [YearController::class, 'view'])->name('year.view');
   Route::get('/student/year/add', [YearController::class, 'add'])->name('year.add');
   Route::post('/student/year/store', [YearController::class, 'store'])->name('year.store');
   Route::get('/student/year/edit/{id}', [YearController::class, 'edit'])->name('year.edit');
   Route::POST('/student/year/update/{id}', [YearController::class, 'update'])->name('year.update');
   Route::get('/student/year/delete/{id}', [YearController::class, 'delete'])->name('year.delete');
   // student group
   Route::get('/student/group/view', [GroupController::class, 'view'])->name('group.view');
   Route::get('/student/group/add', [GroupController::class, 'add'])->name('group.add');
   Route::post('/student/group/store', [GroupController::class, 'store'])->name('group.store');
   Route::get('/student/group/edit/{id}', [GroupController::class, 'edit'])->name('group.edit');
   Route::post('/student/group/update/{id}', [GroupController::class, 'update'])->name('group.update');
   Route::get('/student/group/delete/{id}', [GroupController::class, 'delete'])->name('group.delete');
});

