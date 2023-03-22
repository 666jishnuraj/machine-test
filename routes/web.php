<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserLoginController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\AdminController;

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

// Route::get('/', function () {
//     return view('welcome');
// });




	


    
        Route::get('/',[UserLoginController::class,'index']);
        Route::post('/login',[UserLoginController::class,'login']);
      
    
Route::get('/logout',[AdminController::class,'logout']);
//customer
Route::get('/customer',[UserLoginController::class,'customerindex']);
Route::post('/add_to_cart',[UserLoginController::class,'add_to_cart']);
Route::get('/my_cart',[UserLoginController::class,'my_cart']);
Route::get('/user_home',[UserLoginController::class,'customerindex'])->name('user_home');
Route::get('/remove_cart/{id}',[UserLoginController::class,'remove_cart']);
Route::get('/check_out',[UserLoginController::class,'check_out']);
Route::get('/user_order',[UserLoginController::class,'user_order']);
Route::get('/view_more/{id}',[UserLoginController::class,'view_more']);

//employe

Route::get('/employe',[EmployeController::class,'employeindex']);
Route::post('/add_product',[EmployeController::class,'add_product']);

//admin
Route::get('/admin',[AdminController::class,'adminindex']);

Route::get('/approve_project/{id}',[AdminController::class,'approve_project']);
Route::get('/disapprove_product/{id}',[AdminController::class,'disapprove_product']);
Route::get('/user_oders',[AdminController::class,'user_oders']);
Route::get('/deliver/{id}',[AdminController::class,'deliver']);




