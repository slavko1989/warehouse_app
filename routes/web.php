<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\ProductivityController;
use App\Http\Controllers\ShiftsController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\EmployeeTeamController;

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

Route::controller(DashboardController::class)->group(function() {
    Route::prefix('dashboard')->group(function() {
    Route::get('/index','index');
    Route::get('/tables/tables','tables');
    Route::get('/profile/signIn','signIn');
});
});

Route::controller(EmployeeController::class)->group(function() {
    Route::prefix('dashboard/employees')->group(function() {
    Route::get('/index','create');
    Route::get('/new_employee','new_employee');
    Route::post('/new_employee','store')->name('create_employee');
    Route::get('/delete/{id}','delete');
    Route::get('/edit/{id}','edit')->name('edit_emp');
    Route::post('/edit/{id}','update');
    });
});

Route::controller(ProductivityController::class)->group(function() {
    Route::prefix('dashboard/productivities')->group(function() {
    Route::get('/index','create');
    Route::get('/new_productivity','new_productivity');
    Route::post('/new_productivity','store')->name('create_productivity');
    Route::get('/delete/{id}','delete');
    Route::get('/edit/{id}','edit')->name('edit_prd');
    Route::post('/edit/{id}','update');
    });
});

Route::controller(ShiftsController::class)->group(function() {
    Route::prefix('dashboard/shifts')->group(function() {
    Route::get('/index','index');
    Route::get('/create_shift','add_shift');
    Route::post('/create_shift','store')->name('create_shift');
    Route::get('/delete/{id}','delete');
    Route::get('/edit/{id}','edit')->name('edit_shift');
    Route::post('/edit/{id}','update');
    });
});

Route::controller(PositionController::class)->group(function() {
    Route::prefix('dashboard/position')->group(function() {
    Route::get('/index','index');
    Route::get('/create','create');
    Route::post('/create','store')->name('create_position');
    });
});

Route::controller(LeadController::class)->group(function() {
    Route::prefix('dashboard/lead')->group(function() {
    Route::get('/index','index');
    Route::get('/create','create');
    Route::post('/create','store')->name('create_lead');
    });
});

Route::controller(EmployeeTeamController::class)->group(function() {
    Route::prefix('dashboard/emp_team')->group(function() {
    Route::get('/index','index');
    Route::get('/create','create');
    Route::post('/create','store')->name('create_team');
    });
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
