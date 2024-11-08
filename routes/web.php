<?php

use App\Livewire\AdminDashboard;
use App\Livewire\ProductDetails;
use Illuminate\Support\Facades\Route;

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
Route::get('/product/details', ProductDetails::class);

Route::group(['middleware' => 'admin'], function(){
    Route::get('/admin/dashboard', AdminDashboard::class)->name('dashboard');
});

