<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

// Home Route
Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

//dashboard routes ke direktori acl/{role}/dashboard atur di
Route::get('/dashboard', [AuthController::class, 'dashboard'])->middleware('auth')->name('dashboard');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/dashboard', [AuthController::class, 'dashboard'])->middleware('auth')->name('dashboard');


// Admin Routes
Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'adminDashboard'])->name('admin.dashboard');
    Route::resource('users', UserController::class);
    Route::get('/users/create', [UserController::class, 'create'])->name('admin.users.create');
    Route::post('/users', [UserController::class, 'store'])->name('admin.users.store');
    Route::get('/users', [UserController::class, 'index'])->name('admin.users.index');
    Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('admin.users.edit');
    Route::put('/users/{user}', [UserController::class, 'update'])->name('admin.users.update');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('admin.users.destroy');
    //news routes
    Route::resource('news', NewsController::class);
    Route::get('/news', [NewsController::class, 'index'])->name('admin.news.index');
    Route::post('/news', [NewsController::class, 'store'])->name('admin.news.store');
    Route::get('/news/{news}', [NewsController::class, 'show'])->name('admin.news.show');
    Route::get('/news', [NewsController::class, 'index'])->name('admin.news.index');
    Route::get('/news/create', [NewsController::class, 'create'])->name('admin.news.create');
    Route::get('/news/{news}/edit', [NewsController::class, 'edit'])->name('admin.news.edit');
    Route::put('/news/{news}', [NewsController::class, 'update'])->name('admin.news.update');
    Route::delete('/news/{news}', [NewsController::class, 'destroy'])->name('admin.news.destroy');
    // project routes
    Route::resource('projects', ProjectController::class);
    Route::get('/projects/create', [ProjectController::class, 'create'])->name('admin.projects.create');
    Route::post('/projects', [ProjectController::class, 'store'])->name('admin.projects.store');
    Route::get('/projects', [ProjectController::class, 'index'])->name('admin.projects.index');
    Route::get('/projects/{project}/edit', [ProjectController::class, 'edit'])->name('admin.projects.edit');
    Route::put('/projects/{project}', [ProjectController::class, 'update'])->name('admin.projects.update');
    Route::delete('/projects/{project}', [ProjectController::class, 'destroy'])->name('admin.projects.destroy');
});

// Editor Routes
Route::middleware(['auth', 'role:editor'])->prefix('editor')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'editorDashboard'])->name('editor.dashboard');
    // News routes for editor
    Route::resource('news', NewsController::class)->except(['index', 'destroy']);
    Route::get('/news/create', [NewsController::class, 'create'])->name('editor.news.create');
    Route::get('/news/{news}/edit', [NewsController::class, 'edit'])->name('editor.news.edit');
    Route::put('/news/{news}', [NewsController::class, 'update'])->name('editor.news.update');

    // Project routes for editor
    Route::resource('projects', ProjectController::class)->except(['index', 'destroy']);
    Route::get('/projects/create', [ProjectController::class, 'create'])->name('editor.projects.create');
    Route::get('/projects/{project}/edit', [ProjectController::class, 'edit'])->name('editor.projects.edit');
    Route::put('/projects/{project}', [ProjectController::class, 'update'])->name('editor.projects.update');    
});

// User Routes
Route::middleware(['auth', 'role:user'])->prefix('user')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'userDashboard'])->name('user.dashboard');
    // Trial Template Routes
    Route::get('/trial-template', function () {
        return view('user.trial_template');
    })->name('user.trial_template');
});
