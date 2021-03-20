<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\ProjectController;
use App\Http\Controllers\Backend\AwardsController;
use App\Models\FileManager;
// All route names are prefixed with 'admin.'.
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('awards', [AwardsController::class, 'index'])->name('awards.index');
Route::get('awards/edit/{id}', [AwardsController::class, 'edit'])->name('awards.edit');
Route::get('awards/create', [AwardsController::class, 'create'])->name('awards.create');
Route::get('awards/get_tableDetails', [AwardsController::class, 'getDetails'])->name('awards.getDetails');


Route::get('projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('projects/edit/{id}', [ProjectController::class, 'edit'])->name('projects.edit');
Route::get('project/create', [ProjectController::class, 'create'])->name('project.create');
Route::get('project/get_tableDetails', [ProjectController::class, 'getDetails'])->name('project.getDetails');
Route::get('project/delete/{id}', [ProjectController::class, 'delete'])->name('project.delete');

Route::get('file_manager/index', [FileManager::class, 'index'])->name('file_manager.index');
Route::get('file_manager/get-details', [FileManager::class, 'getData'])->name('file_manager.json');
Route::get('file_manager/get-details-dialog', [FileManager::class, 'getDialogData'])->name('get_dialog_data.json');
Route::get('file_manager/create', [FileManager::class, 'create'])->name('file_manager.create');
Route::post('file_manager/store_file', 'FileManagerController@store')->name('file_manager.store');