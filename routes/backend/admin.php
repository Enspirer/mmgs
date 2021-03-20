<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\ProjectController;
use App\Http\Controllers\Backend\AwardsController;

// All route names are prefixed with 'admin.'.
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('awards', [AwardsController::class, 'index'])->name('awards.index');
Route::get('awards/edit/{id}', [AwardsController::class, 'edit'])->name('awards.edit');
Route::get('awards/create', [AwardsController::class, 'create'])->name('awards.create');


Route::get('projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('projects/edit/{id}', [ProjectController::class, 'edit'])->name('projects.edit');
Route::get('project/create', [ProjectController::class, 'create'])->name('project.create');