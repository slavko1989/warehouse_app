<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProductivityController;
use App\Http\Controllers\ShiftsController;
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
    Route::get('/dashboard/index','index');
    Route::get('/dashboard/tables/tables','tables');
    Route::get('/dashboard/profile/signIn','signIn');
});

Route::controller(EmployeeController::class)->group(function() {
    Route::get('dashboard/employees/index','create');
    Route::get('dashboard/employees/new_employee','new_employee');
    Route::post('dashboard/employees/new_employee','store')->name('create_employee');
    Route::get('dashboard/employees/delete/{id}','delete');
    Route::get('dashboard/employees/edit/{id}','edit')->name('edit_emp');
    Route::post('dashboard/employees/edit/{id}','update');
});

Route::controller(ProductivityController::class)->group(function() {
    Route::get('dashboard/productivities/index','create');
    Route::get('dashboard/productivities/new_productivity','new_productivity');
    Route::post('dashboard/productivities/new_productivity','store')->name('create_productivity');
    Route::get('dashboard/productivities/delete/{id}','delete');
    Route::get('dashboard/productivities/edit/{id}','edit')->name('edit_prd');
    Route::post('dashboard/productivities/edit/{id}','update');

});

Route::controller(ShiftsController::class)->group(function() {
    Route::get('/dashboard/shifts/index','index');
    Route::get('dashboard/shifts/create_shift','add_shift');
    Route::post('dashboard/shifts/create_shift','store')->name('create_shift');
    Route::get('/dashboard/shifts/delete/{id}','delete');
    Route::get('/dashboard/shifts/edit/{id}','edit')->name('edit_shift');
    Route::post('/dashboard/shifts/edit/{id}','update');
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
