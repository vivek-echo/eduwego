<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebPipeLines\HomeController;
use App\Http\Controllers\ApplicationPipeLines\NewsNoticeController;
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
Route::match(['get', 'post'], '/sowrabha-institute-of-nursing-sciences', [HomeController::class,'sowrabhaInsIndex']);
Route::match(['get', 'post'], '/enlight-institute-of-paramedical-sciences', [HomeController::class,'englightInsIndex']);
Route::match(['get', 'post'], '/enlight-school-of-nursing', [HomeController::class,'enlightSchoolIndex']);
Route::match(['get', 'post'], '/sri-shantidhama-school-of-nursing', [HomeController::class,'santidhamaschoolIndex']);
Route::middleware(['auth'])->group(function () {
    //Your routes here
    Route::match(['get', 'post'], '/ContentPageNewsNotice', [NewsNoticeController::class,'ContentPageNewsNoticeIndex']);
    Route::match(['get', 'post'], '/submitNewsNotice', [NewsNoticeController::class,'submitNewsNoticeForm']);
    Route::match(['get', 'post'], '/getNewsNoticeData', [NewsNoticeController::class,'getNewsNoticeData']);
});

Route::match(['get', 'post'], '/MSCNursing', [HomeController::class,'MSCNursingIndex']);//added by deepak on 20-05-2024
Route::match(['get', 'post'], '/PbbscNursing', [HomeController::class,'PbbscNursingIndex']);//added by deepak on 20-05-2024
Route::match(['get', 'post'], '/GnmNursing', [HomeController::class,'GnmNursingIndex']);//added by deepak on 20-05-2024
Route::get('/download-pdf', [HomeController::class, 'downloadPdf'])->name('download.pdf');

Route::match(['get', 'post'], '/diploma-in-medical-laboratory-technology-dmlt', [HomeController::class,'diplomainmedicallaboratorytechnologydmltIndex']);
Route::match(['get', 'post'], '/diploma-in-medical-imaging-x-ray-technology-dmxt', [HomeController::class,'diplomainmedicalimagingxraytechnologydmxtIndex']);
Route::match(['get', 'post'], '/diploma-in-medical-operation-technology-dmot', [HomeController::class,'diplomainmedicaloperationtechnologydmotIndex']);
Route::match(['get', 'post'], '/diploma-in-medical-anesthesia-technology-dot-dat', [HomeController::class,'diplomainmedicalanesthesiatechnologydotdatIndex']);

Route::match(['get', 'post'], '/Hostel', [HomeController::class,'HostelIndex']);

Route::match(['get', 'post'], '/AboutElgi', [HomeController::class,'AboutElgiIndex']);
Route::match(['get', 'post'], '/ChairmanMessage', [HomeController::class,'ChairmanMessageIndex']);
Route::match(['get', 'post'], '/DirectorMessage', [HomeController::class,'DirectorMessageIndex']);
Route::match(['get', 'post'], '/PrincipalDesk', [HomeController::class,'PrincipalDeskIndex']);


Route::match(['get', 'post'], '/YOUR_ROUTE',function(){
    dd("hello world");
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
