<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\PermissionController;

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
    return view('index');
});


// Route::middleware('auth')->group(function () {
    Route::resource('groups', GroupController::class);
    Route::get('groupspermissions', [PermissionController::class, 'managePermissions'])->name('groups.permissions');

    Route::put('groups/permissions', [PermissionController::class, 'updatePermissions'])->name('groups.permissions.update');
// });


Route::resource('permissions', PermissionController::class);
