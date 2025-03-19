<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FileController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
   return view('home');
});

// Route student
Route::resource('/students', StudentController::class);

Route::middleware('auth')->group(function () {
   // Route dashboard
   Route::resource('/dashboard', DashboardController::class);

   // Route major
   Route::resource('/majors', MajorController::class);
 
   // Route school
   Route::resource('/schools', SchoolController::class);

});

// Route register
Route::get('/register', [RegisterController::class, 'showFormRegister'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Route auth
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route download
Route::get('/download/{file}', [FileController::class, 'download'])->name('donwload');
Route::get('/students/downloadSurat/{id}', [FileController::class, 'downloadSurat']);
Route::get('/panduan', function(){
   return view('students.panduan');
});

Route::middleware('guest')->group(function () {
   Route::get('/login', [AuthController::class, 'showFormlogin'])->name('login');
   Route::post('/login', [AuthController::class, 'login']);
});

