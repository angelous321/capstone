<?php

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

Auth::routes();
Route::get('home', [App\Http\Controllers\AdminController::class, 'adminPanel'])->name('admin.admin-panel');
Route::get('admin/admin-view-guest', [App\Http\Controllers\AdminController::class, 'guestList'])->name('admin.admin-view-guest');
Route::get('modal/admin-view-guest', [App\Http\Controllers\AdminController::class, 'viewguestList'])->name('modal.view-guest');
//Route::prefix('admin')->group(function (){
//Route::get('/admin-view-guest', [AdminController::class, 'admin-view-guest'])->name('admin.admin-view-guest');
//}
//admin-view-Guest
//Route::get("admin-view-guest", function(){

//  return view('admin-view-guest');
//})
