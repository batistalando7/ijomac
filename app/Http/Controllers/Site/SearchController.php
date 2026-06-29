<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Course;
use App\Models\Service;

class SearchController extends Controller
{
    public function search(Request $request){

        $request->validate(['search' => ['required','string']]);

        $search = $request->search;

        $response['students'] = Student::with('course')->where('client_name', 'LIKE', '%'.$search.'%')->where('status', true)->get();
        $response['courses'] = Course::where('name', 'LIKE', '%'.$search.'%')->take(6)->get();
        $response['services'] = Service::where('name', 'LIKE', '%'.$search.'%')->take(6)->get();

        return response()->json($response);
    }
}
