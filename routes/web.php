<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController; 
use App\Http\Controllers\DatController;
use App\Http\Controllers\Api\MainController;


//Route::get('/authentication-login.html', function () {
  //  return view('auth.login');
//});
use App\Http\Controllers\AkunController;

Route::resource('akun', AkunController::class);

Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('register1');
Route::post('/register', [UserController::class, 'register'])->name('register');
 
Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/auth/login', [UserController::class, 'login']);

route::middleware('auth')->group(function (){
    Route::get('dashboard.dashboard', [\App\Http\Controllers\Api\MainController::class,'index']);
    Route::post('dashboard.dashboard', [\App\Http\Controllers\Api\MainController::class,'index']);

    Route::get('/dashboard', function () {
    return view('dashboard.dashboard');

    });
});
route::middleware('auth')->group(function (){
    Route::get('/account', function () {
        return view('dashboard.account');
    });
});


Route::post('/auth/logout', [UserController::class, 'logout'])->name('logout');
Route::post('/dashboard/account', [UserController::class,'profileUpdate'])->name('profileupdate');
Route::get('/head', function () {
    return view('head.head');
});
Route::get('/', function () {
    return view('auth.logout');
});
Route::get('/config', function () {
    return view('items.config');
});
Route::get('bio', [\App\Http\Controllers\DatController::class,'index']);
Route::get('/dashboard', [\App\Http\Controllers\DatController::class,'data']);
//Route::get('/dashboard', [\App\Http\Controllers\DatController::class,'data2']);





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