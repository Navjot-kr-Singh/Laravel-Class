<?php

// use Illuminate\Support\Facades\Route;
// use App\Http\controllers\UserController; 

// Route::get('/user/{id?}', function ($id=0) {
//     return view('user',['id'=>$id]);
// });

// New Test
// Route::get('/user/{id?}',[UserController::class, 'show']);

// Route::get('/welcome-student/{name?}', [UserController::class, 'welcomeStudent']);
// Route::get('/student-name/{name?}', [UserController::class, 'studentName']);
// Route::get('/course/{courseName?}', [UserController::class, 'course']);

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;

// Route::get('/user/{id?}', [UserController::class, 'show']);
// Route::get('/student/{name?}', [StudentController::class, 'show']);

Route::prefix('admin')->group(function () {
  Route::get('/dashboard', function () {
    return "This is the admin dashboard";
  });
  Route::get('/users', function () {
    return "This is the admin users page";
  });
});

Route::get('header', function(){
    return response("Hello World")
        ->header('Content-Type', 'text/plain')
    ->header('X-Custom-Header', 'Laravel');
});