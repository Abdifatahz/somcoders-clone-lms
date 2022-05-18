<?php

use Illuminate\Support\Facades\Route;

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

Route::get("/", function () {
    return "Home";
});

Route::get("/courses", function () {
    return "Courses";
});

Route::get("/course/{slug}", function ($slug) {
    return "Courses " . $slug;
})->name("course.show");

Route::get("categories", function () {
    return "Categories";
})->name("category.index");

Route::get("about", function () {
    return "about";
});
