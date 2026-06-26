<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class SearchController extends Controller
{
    public function search(Request $request){
        $request->validate(['search' => ['required','string']]);

        $search = $request->search;

        $result = Student::where('client_name', 'LIKE', '%'.$search.'%')->where('status', true)->get();

        return response()->json(['result' => $result]);
    }
}
