<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\CourseSubjectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/get-accounts', [AccountController::class,'getAccount'])->name('getAccounts')->middleware('api.key');
Route::get('/get-course-subjects', [CourseSubjectController::class,'getCourseSubject'])->name('getCourseSubject')->middleware('api.key');

Route::get('/accounts', [AccountController::class,'getAccountVotingAPI'])->name('getAccountApi');

Route::get('/students', [AccountController::class,'getStudentAPI'])->name('getStudentAPI');

Route::get('/course-subjects', [CourseSubjectController::class,'getCourseSubjectAPI'])->name('getCourseSubjectAPI');
