<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function index(){
        $courses = Course::where('status', 'published')->orderByDesc('id')->paginate(6);

        return view('site.course.index', compact('courses'));
    }
    
    public function show(Course $course){

        return view('site.course.show', compact('course'));
    }
}
