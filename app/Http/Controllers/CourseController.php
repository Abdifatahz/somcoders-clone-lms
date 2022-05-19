<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{

    public function show($slug)
    {
        $course =  Course::with("categories")->whereSlug($slug)->first();
        return view("frontend.course", compact("course"));
    }
}
