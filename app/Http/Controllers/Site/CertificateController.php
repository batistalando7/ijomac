<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Str;

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

        if ($request->secret_code != $student->secret_code) {
            return redirect()->back()->withErrors(['secret_code' => 'Código secreto invalido. Por favor, tente novamente.']);
        }

        $levels = [
            'beginner' => 'Iniciante',
            'intermediate' => 'Intermediário',
            'advanced' => 'Avançado'
        ];

        $courseName = Str::snake(Str::lower($student->course->name));

        $serie = 'IJOMAC-' . date('Y') . '-' . str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT);
        // Gera o QR Code com os dados desejados
        $qrData = route('admin.student.show', ['student' => $student->slug]); // ou qualquer link/texto que você quiser

        $qrUrl = "https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=" . urlencode($qrData);

        $pdf = PDF::loadView('pdf.student.certificate', compact(['student', 'qrUrl', 'levels', 'serie']))->setPaper('a4', 'portrait');
        return $pdf->download($student->code . '_certificado_do_curso_de_' . $courseName . '.pdf');
    }
}
