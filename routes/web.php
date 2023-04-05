<?php

use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\FrontController;
 use App\Http\Controllers\Admin\DashboardController;
 use App\Http\Controllers\Admin\BlogController;
 use App\Http\Controllers\Admin\CategoryController;
 use App\Http\Controllers\UserController;
 use App\Http\Controllers\LeagueController;
 use App\Http\Controllers\TourismController;




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

Route::get('/temp', function () {
    return view('backend.layouts.template');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/',[FrontController::class,'index']);

Route::get('admin/dashboard',[DashboardController::class,'index']);

Route::get('admin/blog/create',[BlogController::class,'index'])->name('admin.blog.create')->middleware('auth');
Route::post('admin/blog/store',[BlogController::class,'store'])->name('admin.blog.store')->middleware('auth');
Route::get('admin/blog/table',[BlogController::class,'table'])->name('admin.blog.table')->middleware('auth');
Route::get('admin/blog/edit/{id}',[BlogController::class,'edit'])->name('admin.blog.edit')->middleware('auth');
Route::post('admin/blog/update/{id}',[BlogController::class,'update'])->name('admin.blog.update')->middleware('auth');
Route::get('admin/blog/delete/{id}',[BlogController::class,'delete'])->name('admin.blog.delete')->middleware('auth');
Route::get('admin/category/create',[CategoryController::class,'index'])->name('admin.category.create')->middleware('auth');
Route::post('admin/category/store',[CategoryController::class,'store'])->name('admin.category.store')->middleware('auth');
Route::get('admin/category/table',[CategoryController::class,'table'])->name('admin.category.table')->middleware('auth');
Route::get('admin/category/edit/{id}',[CategoryController::class,'edit'])->name('admin.category.edit')->middleware('auth');
Route::post('admin/category/update/{id}',[CategoryController::class,'update'])->name('admin.category.update')->middleware('auth');
Route::get('admin/category/delete/{id}',[CategoryController::class,'delete'])->name('admin.category.delete')->middleware('auth');


Route::get('/detail/{id}',[FrontController::class,'detail'])->name('detail')->middleware('auth');


// UserController
Route::get('admin/user/create',[UserController::class,'create'])->name('admin.user.create');
Route::post('admin/user/store',[UserController::class,'store'])->name('admin.user.store');
Route::get('admin/user/table',[UserController::class,'index'])->name('admin.user.table');
Route::get('admin/user/edit/{id}',[UserController::class,'edit'])->name('admin.user.edit');
Route::post('admin/user/update/{id}',[UserController::class,'update'])->name('admin.user.update');
Route::get('admin/user/delete/{id}',[UserController::class,'destroy'])->name('admin.user.delete');

// LeagueController
Route::get('admin/league/create',[LeagueController::class,'create'])->name('admin.league.create');
Route::post('admin/league/store',[LeagueController::class,'store'])->name('admin.league.store');
Route::get('admin/league/table',[LeagueController::class,'index'])->name('admin.league.table');
Route::get('admin/league/edit/{id}',[LeagueController::class,'edit'])->name('admin.league.edit');
Route::post('admin/league/update/{id}',[LeagueController::class,'update'])->name('admin.league.update');
Route::get('admin/league/delete/{id}',[LeagueController::class,'destroy'])->name('admin.league.delete');

// TourismController
Route::get('admin/tourism/create',[TourismController::class,'create'])->name('admin.tourism.create');
Route::post('admin/tourism/store',[TourismController::class,'store'])->name('admin.tourism.store');
Route::get('admin/tourism/table',[TourismController::class,'index'])->name('admin.tourism.table');
Route::get('admin/tourism/edit/{id}',[TourismController::class,'edit'])->name('admin.tourism.edit');
Route::post('admin/tourism/update/{id}',[TourismController::class,'update'])->name('admin.tourism.update');
Route::get('admin/tourism/delete/{id}',[TourismController::class,'destroy'])->name('admin.tourism.delete');

