<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Course;

class HomeController extends Controller
{
    public function index()
    {
        $courses    =  Course::withCount("lessons")->with("categories")->get();
        $categories =  Category::withCount("courses")->get();
        return view("frontend.index", compact("courses", "categories"));
    }
}
