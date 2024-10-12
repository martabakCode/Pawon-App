<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\KitchenDetail;
use App\Livewire\ShowKitchens;
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

Route::get('/', ShowKitchens::class);

Route::get('/kitchen/{id}', KitchenDetail::class)->name('kitchen.show');
