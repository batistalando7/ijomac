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
        $response = [
            'course' => $course,
            'relatedCourses' => Course::where('category_id', $course->category_id)
                ->where('id', '!=', $course->id)
                ->where('status', 'published')
                ->orderByDesc('id')
                ->take(4)
                ->get(),
        ];
        return view('site.course.details', $response);
    }
}
