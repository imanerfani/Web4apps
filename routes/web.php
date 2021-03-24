<?php

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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', function () {
    return view('Index');
});

Route::middleware(['web'])->group(function ()
{
    //Route::get('/admin',[\App\Http\Controllers\Admin\Dashboard\DashboardController::class,'index']);
    Route::get('/admin/dashboard',[App\Http\Controllers\Admin\Dashboard\DashboardController::class,'index']);
   //Route::get('/admin/userManager/createUser',\App\Http\Livewire\Admin\UserManagement\CreateUser::class);
    //Route::post('/admin/userManager/addUser',[\App\Http\Livewire\Admin\UserManagement\CreateUser::class],'store')->name('user.add');
});


