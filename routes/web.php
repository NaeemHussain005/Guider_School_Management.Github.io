<?php
use App\Http\Controllers\AdmissionController;
use Illuminate\Support\Facades\Route;

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
    return view('main');
});

Auth::routes();

Route::get('/main', [App\Http\Controllers\MainController::class, 'index'])->name('main');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');
Route::get('/course', [App\Http\Controllers\CourseController::class, 'index'])->name('course');
Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index'])->name('blog');
Route::get('/team', [App\Http\Controllers\TeamController::class, 'index'])->name('team');
Route::get('/career', [App\Http\Controllers\HomeController::class, 'showcareers'])->name('career');
Route::get('/admit', [App\Http\Controllers\AdmitController::class, 'display'])->name('admit');
Route::get('/apply',[App\Http\Controllers\AdmitController::class,'apply'])->name('apply');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::get('/show', [App\Http\Controllers\HomeController::class, 'show'])->name('show');
Route::get('/jobs', [App\Http\Controllers\HomeController::class, 'display'])->name('jobs');
Route::get('/admissions', [App\Http\Controllers\HomeController::class, 'admissions'])->name('admissions');
Route::get('/postJob', [App\Http\Controllers\HomeController::class, 'postJob'])->name('postJob');
Route::post('/saveJob', [App\Http\Controllers\PostJobController::class, 'saveJob'])->name('saveJob');
Route::get('delete/{id}', [App\Http\Controllers\HomeController::class, 'destroy']);
Route::get('delete-records', [App\Http\Controllers\HomeController::class, 'finish']);
Route::post('/applyJob',[App\Http\Controllers\PostJobController::class,'applyJob']);
Route::get('/applyJob',[App\Http\Controllers\PostJobController::class,'index'])->name('applyJob');
Route::post('/saveAnnouncement',[App\Http\Controllers\AdmissionController::class,'announcement']);
Route::post('/applyadmission', [App\Http\Controllers\AdmitController::class, 'applyadmission']);
Route::get('/applyadmission', [App\Http\Controllers\AdmitController::class, 'apply']);
Route::get('/viewapplicant', [App\Http\Controllers\ApplicantController::class, 'show'])->name('viewapplicant');
Route::get('delete/{id}', [App\Http\Controllers\HomeController::class, 'des']);
Route::get('delete-records', [App\Http\Controllers\HomeController::class, 'end']);

