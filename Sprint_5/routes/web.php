<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\visitorController;
use App\Http\Controllers\visitorPage;
use App\Http\Controllers\hrController;
use App\Http\Controllers\hrPage;

use App\Http\Controllers\ExcelController;

use App\Http\Controllers\employeeController;
use App\Http\Controllers\employeePage;

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

Route::get('/login', function () {
    return view('login');
});

// Route::get('/emlogin', function () {
//     return view('employee');
// });

Route::get('/hrlogin', function () {
    return view('HR');
});

Route::view('home', 'home');

Route::view('vlogin', 'vlogin');
Route::post('vlogin', [visitorController::class, 'vlogin']);

//============================================

Route::view('employee', 'employee');
Route::post('employee', [employeeController::class, 'emlogin']);


//============================================


// Route::post("/login", [visitorController::class, 'login']);
Route::get("/", [visitorPage::class, 'register']);

Route::post("/hrlogin", [hrController::class, 'hrlogin']);
Route::get("/", [hrPage::class, 'register']);


//==============================================

Route::get("list", [hrController::class, 'show']);
Route::get("deleto/{id}", [hrController::class, 'delete']);


//==============================================

Route::get("update/{id}", [hrController::class, 'showData']);
Route::post("update", [hrController::class, 'update']);


//================================================================

Route::get("assign", [hrController::class, 'showA']);


Route::get("assign/{id}", [hrController::class, 'showData2']);
Route::post("assign/{id}", [hrController::class, 'projectUpdate']);


//================================================================

Route::get("show_project", [hrController::class, 'showPro']);
Route::get("delete/{id}", [hrController::class, 'deletePro']);


//================================================================

Route::get("designation", [hrController::class, 'showD']);

Route::get("updateD/{id}", [hrController::class, 'showUpdateD']);
Route::post("updateD", [hrController::class, 'updateD']);

//================================================================

Route::view('insertDesignation', 'insertDesignation');
Route::post('insertDesignation', [visitorController::class, 'insertD']);

//================================================================

Route::get("showV", [visitorController::class, 'showV']);

//================================================================


Route::get('/upload', [hrController::class, 'index']);

Route::post('/upload', [hrController::class,'store']);


//================================================================

Route::get('/pdf', [hrController::class, 'pdf']);

Route::get('/cou', [hrController::class, 'cou']);

//============================================

// Route::get('/sea', [hrController::class, 'sea']);

Route::get('/list', [hrController::class, 'sea']);


//===================LoGIN HR=============================

Route::get('/Hlogin', function () {
    return view('Hlogin');
});




Route::post('/Hlogin', [hrController::class,'Hlogin']);



//

Route::get('/Hcred', function () {
    return view('Hcred');
});




Route::post('/Hcred', [hrController::class,'Hcred']);



//====================LoGIN EM===============================

Route::get('/Elogin', function () {
    return view('Elogin');
});


Route::post('/Elogin', [hrController::class,'Elogin']);


//================ChANGE PASS=============================

Route::get("forgetpassList", [hrController::class, 'showHR']);


Route::get("forgetPass/{id}", [hrController::class, 'showHRin']);
Route::post("forgetPass", [hrController::class, 'forgetPass']);


//===============================================

Route::get("viewDesignation", [hrController::class, 'showDesig']);

//===============================================

Route::get("viewProject", [hrController::class, 'showP']);


//================SearchPro======================

Route::get('/viewProject', [hrController::class, 'seaP']);


//=================clintInfo=====================

Route::view('clientInfo', 'clientInfo');
Route::post('clientInfo', [visitorController::class, 'clientInfo']);

//===============showCinfo=======================

Route::get("showCinfo", [hrController::class, 'showCinfo']);


// Route::get("/", [employeePage::class, 'register']);
// Route::post("/emlogin", [employeeController::class, 'login']);