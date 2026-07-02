<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class CertificateController extends Controller
{
    public function verify(Student $student)
    {
        return view('site.certificate.verify', compact('student'));
    }

    public function show(Request $request, Student $student)
    {
        $request->validate([
            'secret_code' => 'required|string',
        ]);

        /* if ($request->secret_code != $student->secret_code) {
            return redirect()->back()->withErrors(['secret_code' => 'Código secreto invalido. Por favor, tente novamente.']);
        } */

        return redirect()->route('admin.student.certificate', ['student' => $student->slug]);
    }
            
}
