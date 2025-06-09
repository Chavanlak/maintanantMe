<?php

use App\Http\Controllers\BranchController;
use App\Http\Controllers\RepairrequestController;
use App\Http\Controllers\WorkdetailController;
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

Route::get('/testview', action: function () {
    return view('testview');
});
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/test',[BranchController::class, 'getallbranches']);
// Route::group(['prefix'=>'branch'], function () {
//  Route::apiResource('branch', BranchController::class);
// });
// http://localhost:8000/branch/branches
// Route::group(['prefix'=>'branch'], function () {
//     Route::apiResource('/branches', BranchController::class);
// });
Route::get('/branch', [BranchController::class, 'getallbranches']);
Route::get('/branch/{id}', [BranchController::class, 'getBranchById']);
Route::get('/equipment',[RepairrequestController::class, 'getAllequipment']);
Route::get('request',[RepairrequestController::class, 'getBarnch']);
// Route::get('status',[RepairrequestController::class, 'showallstatus']);
Route::get('status',[RepairrequestController::class, 'getAllRepairRequests']);
Route::get('workdeialId',[RepairrequestController::class, 'getworkdetail']);


Route::get('/workdetail', [RepairrequestController::class, 'getworkdetailch'])->name('workdetail.view');
Route::get('/work',[WorkdetailController::class, 'getallWorkdetail'])->name('workdetail.all');
Route::get('/wk',[RepairrequestController::class, 'ch'])->name('workdetail.ch');

Route::get('/workId',[WorkdetailController::class, 'getWorkDetailById'])->name('workdetail.id');
