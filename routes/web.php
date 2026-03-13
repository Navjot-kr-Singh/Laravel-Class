<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\UserController;

// Route::get('/user/{id?}', function ($id=0) {
//     return view('user',['id'=>$id]);
// });


Route::get('/user/{id?}',[UserController::class, 'show']);

Route::get('/welcome-student/{name?}', [UserController::class, 'welcomeStudent']);
Route::get('/student-name/{name?}', [UserController::class, 'studentName']);
Route::get('/course/{courseName?}', [UserController::class, 'course']);