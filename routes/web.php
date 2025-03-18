<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\SocialController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\UielementsController;
use App\Http\Controllers\UtilitiesController;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\AdvanceduiController;
use App\Http\Controllers\WidgetsController;
use App\Http\Controllers\AppsController;
use App\Http\Controllers\TablesController;
use App\Http\Controllers\ChartsController;
use App\Http\Controllers\MapsController;
use App\Http\Controllers\IconsController;


// use App\Http\Controllers\Controller;

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

// Route::get('', [Controller::class, 'index']);

// DASHBOARDS //
Route::get('/', [DashboardsController::class, 'index']);
Route::get('/register', [AuthenticationController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthenticationController::class, 'register']);

Route::get('/login', [AuthenticationController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthenticationController::class, 'login']);
Route::post('/logout', [AuthenticationController::class, 'logout'])->name('logout');

Route::controller(SocialController::class)->group(function () {
    Route::get('/auth/google', 'googleLogin')->name('auth.google');
    Route::get('/auth/google-callback', 'googleAuthentication')->name('auth.google-callback');
});

Route::get('index', [DashboardsController::class, 'index']);

// Blog //
Route::get('/blog', [BlogController::class, 'index'])->name('index');
