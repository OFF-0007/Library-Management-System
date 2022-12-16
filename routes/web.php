<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Models\Student;
use App\Http\Controllers\PublisherController;
use App\Models\Publisher;
use App\Http\Controllers\CategoryController;
use App\Models\Category;
use App\Http\Controllers\AuthorController;
use App\Models\Author;
use App\Http\Controllers\BookController;
use App\Models\Book;
use App\Http\Controllers\IssueController;
use App\Models\BookIssues;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\SettingsController;
use App\Models\Settings;




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
    return view('/home');
});

// student 
Route::get('student/add',[StudentController::class,'index']);
Route::post('student/add','App\Http\Controllers\StudentController@student');
Route::post('stu/insert-data',[StudentController::class,'insertstudent']);
Route::get('/student/addsss',[StudentController::class,'addstudent']);
Route::get('student/edit/{id}','App\Http\Controllers\StudentController@editstudent');
Route::put('update-datastu/{id}','App\Http\Controllers\StudentController@updatestudent');
Route::get('deletestu/{id}','App\Http\Controllers\StudentController@removestu');

// publisher
Route::get('publisher/add',[PublisherController::class,'index']);
Route::post('publisher/add','App\Http\Controllers\PublisherController@publisher');
Route::post('pub/insert-data',[PublisherController::class,'insertpublisher']);
Route::get('/publisher/adds',[PublisherController::class,'addpublisher']);
Route::get('publisher/edit/{id}','App\Http\Controllers\PublisherController@editpublisher');
Route::put('update-datapub/{id}','App\Http\Controllers\PublisherController@updatepublisher');
Route::get('deletepub/{id}','App\Http\Controllers\PublisherController@removepub');

// category
Route::get('category/add',[CategoryController::class,'index']);
Route::post('category/add','App\Http\Controllers\CategoryController@category');
Route::post('/cat/insert-data',[CategoryController::class,'insertcategory']);
Route::get('/category/addss',[CategoryController::class,'addcategory']);
Route::get('category/edit/{id}','App\Http\Controllers\CategoryController@editcategory');
Route::put('update-datacat/{id}','App\Http\Controllers\CategoryController@updatecategory');
Route::get('deletecat/{id}','App\Http\Controllers\CategoryController@removecat');

//author
Route::get('author/add',[AuthorController::class,'index']);
Route::post('author/add','App\Http\Controllers\AuthorController@author');
Route::post('/aut/insert-data',[AuthorController::class,'insertauthor']);
Route::get('/author/addssss',[AuthorController::class,'addauthor']);
Route::get('author/edit/{id}','App\Http\Controllers\AuthorController@editauthor');
Route::put('update-dataaut/{id}','App\Http\Controllers\AuthorController@updateauthor');
Route::get('deleteaut/{id}','App\Http\Controllers\AuthorController@removeaut');

// books
Route::get('book/add',[BookController::class,'index']);
Route::post('book/add','App\Http\Controllers\BookController@book');
Route::post('/boo/insert-data',[BookController::class,'insertbook']);
Route::get('/book/addb',[BookController::class,'addbook']);
Route::get('book/edit/{id}','App\Http\Controllers\BookController@editbook');
Route::put('update-databoo/{id}','App\Http\Controllers\BookController@updatebook');
Route::get('deleteboo/{id}','App\Http\Controllers\BookController@removeboo');

// bookissue
Route::get('bookissue/add',[IssueController::class,'index']);
Route::post('bookissue/add','App\Http\Controllers\IssueController@bookissu');
Route::post('/issu/insert-data',[IssueController::class,'insertissu']);
Route::get('bookissue/issu',[IssueController::class,'addissu']);
Route::get('bookissue/edit/{id}','App\Http\Controllers\IssueController@editissu');
Route::put('update-dataissu/{id}','App\Http\Controllers\IssueController@updateissu');
Route::get('deleteissu/{id}','App\Http\Controllers\IssueController@removeissu');

// reports
Route::get('/reports', [ReportsController::class, 'index'])->name('reports');
    Route::get('/reports/Date-Wise', [ReportsController::class, 'date_wise'])->name('reports.date_wise');
    Route::post('/reports/Date-Wise', [ReportsController::class, 'generate_date_wise_report'])->name('reports.date_wise_generate');
    Route::get('/reports/monthly-Wise', [ReportsController::class, 'month_wise'])->name('reports.month_wise');
    Route::post('/reports/monthly-Wise', [ReportsController::class, 'generate_month_wise_report'])->name('reports.month_wise_generate');
    Route::get('/reports/not-returned', [ReportsController::class, 'not_returned'])->name('reports.not_returned');

    // settings
    Route::get('/settings', [SettingsController::class, 'index'])->name('settings');
    Route::post('/settings', [SettingsController::class, 'update'])->name('settings');
