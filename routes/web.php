<?php

use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\BudgetController;
use App\Http\Controllers\admin\EventController;
use App\Http\Controllers\admin\LoginController as AdminLoginController;
use App\Http\Controllers\admin\MembersController;
use App\Http\Controllers\admin\MessagesController;
use App\Http\Controllers\admin\StaffController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Middleware\AuthMiddleware;
use Illuminate\Foundation\Exceptions\Handler;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// routes/web.php
Route::group(['middleware'=>'guest'],function(){

    Route::get('/account/login', [LoginController::class, 'index'])->name('account.login');
Route::get('/account/register', [LoginController::class, 'register'])->name('account.register');
Route::post('/account/process-register', [LoginController::class, 'processregister'])->name('account.processregister');
Route::post('/account/authenticate', [LoginController::class, 'authenticate'])->name('account.authenticate');
Route::get('/admin/login', [AdminLoginController::class, 'index'])->name('admin.login');

Route::post('/admin/authenticate', [AdminLoginController::class, 'authenticate'])->name('admin.authenticate');


});



Route::group(['middleware'=>'auth'],function(){
    Route::get('/account/logout', [LoginController::class, 'logout'])->name('account.logout');
    Route::get('/account/dashboard', [dashboardController::class, 'index'])->name('account.dashboard');
    Route::get('/admin/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/Budget', [BudgetController::class, 'index'])->name('admin.budget');
    Route::get('/admin/Event', [EventController::class, 'index'])->name('admin.event');
    Route::get('/admin/AddMembers', [MembersController::class, 'index'])->name('admin.members');
    Route::POST('/admin/AddMembers', [MembersController::class, 'AddMember'])->name('admin.Addmembers');
    

    Route::get('/admin/Messages', [MessagesController::class, 'index'])->name('admin.message');
    Route::get('/admin/AddStaff', [StaffController::class, 'index'])->name('admin.Staff');
    Route::POST('/admin/AddStaff', [StaffController::class, 'Addstaff'])->name('admin.AddStaff');


});










