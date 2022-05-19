<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CategoryController;

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

Route::get("/", [HomeController::class, 'index'])->name("home");
Route::get("categories/{name}", [CategoryController::class, 'show'])->name("category.show");


Route::get("/courses", function () {
    return "Courses";
});

Route::get("/course/{slug}", function ($slug) {
    return "Courses " . $slug;
})->name("course.show");


Route::get("about", function () {
    return "about";
});
