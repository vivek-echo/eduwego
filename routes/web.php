<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebPipeLines\HomeController;
use App\Http\Controllers\WebPipeLines\NewsNoticeController;
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
Route::match(['get', 'post'], '/bScNursing', [HomeController::class,'bscNursingIndex']);
Route::match(['get', 'post'], '/paramedicals', [HomeController::class,'paramedicalsIndex']);
Route::match(['get', 'post'], '/gallery', [HomeController::class,'galleryIndex']);
Route::match(['get', 'post'], '/contacts', [HomeController::class,'contactsIndex']);
Route::match(['get', 'post'], '/facilities', [HomeController::class,'facilitiesIndex']);
Route::match(['get', 'post'], '/scholarship', [HomeController::class,'scholarshipIndex']);
Route::match(['get', 'post'], '/sowrabhaIns', [HomeController::class,'sowrabhaInsIndex']);
Route::match(['get', 'post'], '/englightIns', [HomeController::class,'englightInsIndex']);
Route::match(['get', 'post'], '/enlightSchool', [HomeController::class,'enlightSchoolIndex']);

Route::match(['get', 'post'], '/ContentPageNewsNotice', [NewsNoticeController::class,'ContentPageNewsNoticeIndex']);
Route::match(['get', 'post'], '/submitNewsNotice', [NewsNoticeController::class,'submitNewsNoticeForm']);
Route::match(['get', 'post'], '/getNewsNoticeData', [NewsNoticeController::class,'getNewsNoticeData']);
