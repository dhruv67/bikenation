<?php

use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\User\AdminDashboardComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['auth','isAdmin'])->get('admin/dashboard/', function () {
    return view('layouts.admin.dashboard');
})->name('dashboard');

Route::get('/', function () {
    return view('layouts.user.home');
})->name('user.home');

//Route::middleware(['auth:sanctum', 'verified'])->get('admin/color','ColourController@colour', function () {});
// Route::middleware(['auth', 'isAdmin'])->get('admin/dashboard','ColourController@colour', function () {});

// Route::get('/admin/dashboard', function () {
//     return view('layouts.admin.dashboard');
// })->name('admin.dashboard');

// Route::get('/shopnow/grid', function () {
//     return view('layouts.user.grid');
// });

// Route::get('/shopnow/list', function () {
//     return view('layouts.user.list');
// });

// //For user or customer
// Route::middleware(['auth:sanctum', 'verified'])->group(function () {
//     return view('layouts.user.mainpage');
//     // Route::get('/',UserDashboardComponent::class)->name('user.home');
// })->name('user.home');

// //for admin
// Route::middleware(['auth:sanctum', 'verified','authadmin'])->group(function () {
//     return view('layouts.admin.dashboard');
//     //Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
// })->name('admin.dashboard');

// Route::group(['middleware' => ['auth:sanctum', 'verified','authadmin']], function () {
//     Route::get('/admin/dashboard', function () {
//         return view('layouts.admin.dashboard');
//     });
// });
// Route::middleware(['auth:sanctum', 'verified','authadmin'])->get('/admin/dashboard','Controller@redirectUser', function () {});
// Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
//     Route::get('/', function () {
//         return view('layouts.admin.dashboard');
//     });
// });

// Route::group(['middleware' => ['auth:sanctum', 'verified','authadmin']], function () {
//     Route::get('/admin/dashboard', function () {
//         return view('layouts.admin.dashboard');
//     });
// });

