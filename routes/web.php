<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
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
Route::get('/index', function () {
    return view('welcome');
});
Route::get('/index', function () {
    return view('welcome');
})->name('index');

Route::get('/homestu',function(){
    return view('index1');
});
Route::get('/home',[LoginController::class,'index']);
Route::get('/reg',[LoginController::class,'reg1']);
Route::any('/registed',[LoginController::class,'stored']);
Route::get('/login',[LoginController::class,'login1'])->name('login');
Route::post('/welcome',[LoginController::class,'welcome'])->name('welcome');
Route::get('/admin2',[LoginController::class,'admin'])->name('admin2');
Route::get('/student',[LoginController::class,'student'])->name('student');
Route::get('/teacher',[LoginController::class,'teacher'])->name('teacher');
Route::get('/assign', [HomeController::class,'assign'])->name('assign');
Route::get('/admission',[LoginController::class,'admission'])->name('admission');
Route::get('/view',[LoginController::class,'view']);
Route::get('/manageuser',[HomeController::class,'index'])->name('manageuser');
Route::post('/change/{id}', [HomeController::class, 'change'])->name('change');

Route::get('/manageadmission',[HomeController::class,'manageadmission'])->name('manageadmission');
Route::get('/manageteacher',[HomeController::class,'manageteacher'])->name('manageteacher');
Route::get('/assign',[HomeController::class,'assign'])->name('assign');
Route::get('/managestudent',[HomeController::class,'managestudent'])->name('managestudent');
Route::get('/managestudentadmission',[HomeController::class,'managestudentadmission'])->name('managestudentadmission');
Route::get('/managestudentmarks', [HomeController::class, 'managestudentmarks'])->name('managestudentmarks');

Route::get('/manageuseradmission', [HomeController::class, 'manageuseradmission'])->name('manageuseradmission');
Route::get('/manage_user', [HomeController::class, 'manage_user'])->name('manage_user');
Route::post('/saveupdatestudent',[HomeController::class,'saveupdatestudent'])->name('saveupdatestudent');
Route::post('/saveassign', [HomeController::class, 'saveassign'])->name('saveassign');
Route::get('/updatestudentadmission/{id}',[HomeController::class,'updatestudentadmission'])->name('updatestudentadmission');
Route::post('/saveupdatestudentadmission',[HomeController::class,'saveupdatestudentadmission'])->name('saveupdatestudentadmission');
Route::get('/read/{id}', [HomeController::class, 'read'])->name('read');
Route::get('/update/{id}',[HomeController::class,'update'])->name('update');
Route::get('/updatestudentmarks/{id}',[HomeController::class,'updatestudentmarks'])->name('updatestudentmarks');
Route::get('/delete/{id}', [HomeController::class, 'delete'])->name('delete');
Route::post('/saveupdate',[HomeController::class,'saveupdate'])->name('saveupdate');
Route::post('/savemarks',[HomeController::class,'savemarks'])->name('savemarks');

Route::post('states_by_country', [HomeController::class, 'states_by_country'])->name('states_by_country');
Route::post('cities_by_state', [HomeController::class, 'cities_by_state'])->name('cities_by_state');
//Route::get('/edit/{id}', [HomeController::class, 'edit'])->name('edit');
Route::get('/useraccount',[HomeController::class,'useraccount'])->name('useraccount');
Route::get('/useraccountadmission',[HomeController::class,'useraccountadmission'])->name('useraccountadmission');
Route::get('/useraccountteacher',[HomeController::class,'useraccountteacher'])->name('useraccountteacher');
Route::get('/useraccountstudent',[HomeController::class,'useraccountstudent'])->name('useraccountstudent');