<?php

use App\Http\Controllers\Juan1822240016Controller;
use App\Http\Controllers\ProdiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/juan1822240016/insert', [Juan1822240016Controller::class, 'insert']);
Route::get('/juan1822240016/update', [Juan1822240016Controller::class, 'update']);
Route::get('/juan1822240016/delete', [Juan1822240016Controller::class, 'delete']);
Route::get('/juan1822240016/select', [Juan1822240016Controller::class, 'select']);

Route::get('/juan1822240016/insert-qb', [Juan1822240016Controller::class, 'insertQb']);
Route::get('/juan1822240016/update-qb', [Juan1822240016Controller::class, 'updateQb']);
Route::get('/juan1822240016/delete-qb', [Juan1822240016Controller::class, 'deleteQb']);
Route::get('/juan1822240016/select-qb', [Juan1822240016Controller::class, 'selectQb']);

Route::get('/juan1822240016/insert-elq', [Juan1822240016Controller::class, 'insertElq']);
Route::get('/juan1822240016/update-elq', [Juan1822240016Controller::class, 'updateElq']);
Route::get('/juan1822240016/delete-elq', [Juan1822240016Controller::class, 'deleteElq']);
Route::get('/juan1822240016/select-elq', [Juan1822240016Controller::class, 'selectElq']);

Route::get('/prodi/create', [ProdiController::class, 'create']);
Route::get('/prodi/store', [ProdiController::class, 'store']);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
