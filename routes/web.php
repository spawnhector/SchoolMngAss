<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;

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
    return view('layout.home.body');
})->name('landing');


Route::group(['middleware'=>'admin'], function(){
    Route::get('dashboard',[adminController::class,'home'])->name('admin.dashboard');
    Route::get('/viewstudents', [App\Http\Controllers\studentController::class, 'viewallstudent'])->name('viewstudent');
    Route::get("/viewteacher", [App\Http\Controllers\teacherController::class, 'viewteacher'])->name('viewteacher');
    Route::get("/viewcourse", [App\Http\Controllers\subjectController::class, 'viewcourse'])->name('viewcourse');
});
Route::post("/logout", [App\Http\Controllers\logoutController::class, 'logout'])->name('logout');
