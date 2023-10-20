<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TrangChuController;
use App\Http\Controllers\AuthUsersController;
use App\Http\Controllers\AuthAdminsController;
use App\Http\Controllers\HomeController;



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

Route::get('/', function () {
    return view('welcome');
});

/* login and register users */
Route::group(['middleware' => 'guest'], function () {
    Route::get('users/register', [AuthUsersController::class, 'register'])->name('register');
    Route::post('users/register', [AuthUsersController::class, 'registerPost'])->name('register');
    Route::get('users/login', [AuthUsersController::class, 'login'])->name('login');
    Route::post('users/login', [AuthUsersController::class, 'loginPost'])->name('login');
});
Route::group(['middleware' => 'auth'], function () {
    Route::get('users/trangchu', [TrangChuController::class, 'trangchu']);
    Route::delete('users/logout', [AuthUsersController::class, 'logout'])->name('logout');
});

Route::get('users/index', function () {
    return view('users.index');
});

/* Products*/
Route::get('product',[ProductController::class,'index'])->name('products.index');
Route::get('/products/create',[ProductController::class,'create'])->name('products.create');
Route::post('/products/store',[ProductController::class,'store'])->name('products.store');
Route::get('products/{id}/edit',[ProductController::class,'edit']);
Route::put('products/{id}/update',[ProductController::class,'update']);
Route::delete('products/{id}/delete',[ProductController::class,'delete']);

Route::get('products/{id}/show',[ProductController::class,'show']);

Route::get('users/{id}/show',[ProductController::class,'show_users']);


/*login register admin*/ 
// Route::group(['middleware' => 'guestAdmins'], function () {
    Route::get('admins/register', [AuthAdminsController::class, 'register_admins'])->name('register_admins');
    Route::post('admins/register', [AuthAdminsController::class, 'registerPost_admins'])->name('register_admins');
    Route::get('admins/login', [AuthAdminsController::class, 'login_admins'])->name('login_admins');
    Route::post('admins/login', [AuthAdminsController::class, 'loginPost_admins'])->name('login_admins');
// });
// Route::group(['middleware' => 'authAdmins'], function () {
    Route::get('admins/home', [HomeController::class, 'home_admins']);
    Route::delete('admins/logout', [AuthAdminsController::class, 'logout_admins'])->name('logout_admins');
// });

// Route::get('admins/home', [HomeController::class, 'home_admins']);

// Route::prefix('/admins')->namespace('App\Http\Controller\Admin')->group(function(){
//     Route::match(['get','post'],'login', 'AdminController@login');
//     Route::group(['middleware'=>['admins']],function(){
//         Route::get('home','HomeController@home_admins');
//     });
// });