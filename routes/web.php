<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebPipeLines\HomeController;
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

Route::match(['get', 'post'], '/', [HomeController::class,'homeIndex']);
Route::match(['get', 'post'], '/nursing', [HomeController::class,'nursingIndex']);
Route::match(['get', 'post'], '/paramedicals', [HomeController::class,'paramedicalsIndex']);
Route::match(['get', 'post'], '/gallery', [HomeController::class,'galleryIndex']);
Route::match(['get', 'post'], '/contacts', [HomeController::class,'contactsIndex']);
Route::match(['get', 'post'], '/facilities', [HomeController::class,'facilitiesIndex']);
Route::match(['get', 'post'], '/scholarship', [HomeController::class,'scholarshipIndex']);
Route::match(['get', 'post'], '/ramaKrishnaSchool', [HomeController::class,'ramaKrishnaSchoolIndex']);
Route::match(['get', 'post'], '/sapthagiriSchool', [HomeController::class,'sapthagiriSchoolIndex']);
Route::match(['get', 'post'], '/SriKrishnaCollege', [HomeController::class,'SriKrishnaCollegeIndex']);