<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;//added by deepak on 20-05-2024
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
// Clear Cache using callback route
Route::get('/clear-cache', function () {
    $cacheCommands = array(
        'event:clear',
        'view:clear',
        'cache:clear',
        'route:clear',
        'config:clear',
        'clear-compiled',
        'optimize:clear'
    );

    foreach ($cacheCommands as $command) {
        Artisan::call($command);
    }

   return "Cache cleared successfully";
});


// Clear Cache using controller route
//Route::get('/cache/{command}', [CacheController::class, 'cacheClear']);
// Route::get('/', function () {
//     return view('welcome');
// });
// Artisan::call('route:clear');
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
Route::match(['get', 'post'], '/MSCNursing', [HomeController::class,'MSCNursingIndex']);//added by deepak on 20-05-2024
Route::match(['get', 'post'], '/PbbscNursing', [HomeController::class,'PbbscNursingIndex']);//added by deepak on 20-05-2024
Route::match(['get', 'post'], '/GnmNursing', [HomeController::class,'GnmNursingIndex']);//added by deepak on 20-05-2024


Route::match(['get', 'post'], '/ContentPageNewsNotice', [NewsNoticeController::class,'ContentPageNewsNoticeIndex']);
Route::match(['get', 'post'], '/submitNewsNotice', [NewsNoticeController::class,'submitNewsNoticeForm']);
Route::match(['get', 'post'], '/getNewsNoticeData', [NewsNoticeController::class,'getNewsNoticeData']);

Route::get('/download-pdf', [HomeController::class, 'downloadPdf'])->name('download.pdf');
// Route::match(['get', 'post'], '/test', function(){
//     dd("helloworld");
// });