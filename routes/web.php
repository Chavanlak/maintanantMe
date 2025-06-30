<?php

use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\maststaffinfoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\maststaffinfoitController;
use App\Http\Controllers\NotirepairController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ReportproblemController;
use App\Models\Message;
use App\Models\Notirepair;
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
    return view('testproblem');
});

// Route::get('/message',[MessageController::class,'ShowallMessage']);


// Route::get('/requestmessage',[MessageController::class,'ShowallMessage']);
// Route::get('/showreportproblem',[ReportproblemController::class,'ShowallReportProblem']);
// Route::post('/postmessage',[NotirepairController::class,'addNotirepair']);


// Route::get('/getnoti',[NotirepairController::class,'getNotirepairWithMessageId']);
Route::get('/getnoti/{messageId}/{reportProblemId}', [NotirepairController::class, 'getNotirepairWithMessageId']);
Route::post('/postmessage',[NotirepairController::class,'addNotirepairtestNull']);


Route::get('/showproblem',[ReportproblemController::class,'getAllRProblem']);

// Route::get('/showproblem',[MessageController::class,'gettitleFromReport']);
// Route::get('/showmessage',[MessageController::class,'getAllmessage']);

// Route::get('/show',[ReportproblemController::class,'getAllRProblem']);
// Route::post('/post', [MessageController::class, 'addmessage']);

Route::get('/home', function () {
    return view('dashbord.maindashbord');
});

Route::get('/show',[ReportproblemController::class,'getAllRProblem']);
Route::post('/post', [MessageController::class, 'addmessage']);

//testuser from fujipos
// Route::get('/showuser',[maststaffinfoController::class,'Showallstaffinfo']);
Route::get('/showitemp',[maststaffinfoitController::class,'showallUser']);