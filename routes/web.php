<?php

use Illuminate\Support\Facades\Route;
use App\Models\Student;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/rain', function () {
    return'Rain-Commerce';
});


Route::get('/all-students', function () {
    $students = Student::all();
    return view('student.index', ['students' => $students]);
});
