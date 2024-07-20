<?php

use App\Http\Controllers\demo;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PledgeController;

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

Route::post('/fill_form', [PledgeController::class, 'store'])->name('fill_form_post');
Route::get('/ipledge', [PledgeController::class, 'ipledge'])->name('ipledge');
Route::post('/update_flag', [PledgeController::class, 'updateFlag'])->name('update_flag');
Route::get('/download', [PledgeController::class, 'download'])->name('download');