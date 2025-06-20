<?php

use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\NotirepairController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ReportproblemController;
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

// Route::get('/', function () {
//     return view('notirepair');
// });
Route::get('/showeqp',[EquipmentController::class,'showallEquipment']);
// Route::get('/add',[NotirepairController::class,'addEquipment']);
// Route::get('/showrepair',[NotirepairController::class,'shownotirepair']);
Route::get('/notirepair', [EquipmentController::class, 'showallEquipment']);
Route::post('/statuspost',[NotirepairController::class,'addEquipment']);

//template
Route::get('/', function () {
    return view('layout.dashbord');
});
Route::get('/s', function () {
    return view('layout.dashboardme');
});
Route::get('/ms',function () {
    return view('messagetonotirepair');
});
Route::get('/table',function () {
    return view('datatable');
});
Route::get('/test',function () {
    return view('test');
});
// Route::get('/message',[MessageController::class,'ShowallMessage']);
Route::get('/showreportproblem',[ReportproblemController::class,'ShowallReportProblem']);

Route::get('/requestmessage',[]);
Route::post('/notirepairmessage',[MessageController::class,'addMessage']);
