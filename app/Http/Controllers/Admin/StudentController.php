<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\Student;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Str;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::orderByDesc('id')->get();
        return view('_admin.students.list.index', compact('students'));
    }

    public function create()
    {
        $courses = Course::all();
        return view('_admin.students.create.index', compact('courses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:13',
            'course_id' => 'required|exists:courses,id'
        ], [
            'name.required' => 'Nome do Cliente é obrigatório',
            'email.email' => 'Email não é válido',
            'phone.max' => 'Excedeu o número caracteres para um número válido',
            'course_id.required' => 'Id do curso não identificado'
        ]);

        if (empty($request->email) && empty($request->phone)) {
            return redirect()->back()->with('error', 'Não podemos avançar sem o email ou número de telefone do cliente!');
        }

        $student = new Student();

        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->course_id = $request->course_id;
        $student->code = $this->generateStudentNumber();

        $student->save();

        return redirect()->route('admin.student.index')->with('success', 'Cadastrado com sucesso!');
    }

    public function show(Student $student)
    {
        return view('_admin.students.details.index', compact('student'));
    }

    public function edit(Student $student)
    {
        $courses = Course::all();
        return view('_admin.students.edit.index', compact('student', 'courses'));
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:13',
            'course_id' => 'required|exists:courses,id'
        ], [
            'name.required' => 'Nome do Cliente é obrigatório',
            'email.email' => 'Email não é válido',
            'phone.max' => 'Excedeu o número caracteres para um número válido',
            'course_id.required' => 'Id do curso não identificado'
        ]);

        if (empty($request->email) && empty($request->phone)) {
            return redirect()->back()->with('error', 'Não podemos avançar sem o email ou número de telefone do cliente!');
        }

        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->course_id = $request->course_id;
        $student->code = $this->generateStudentNumber();

        $student->update();

        return redirect()->route('admin.student.index')->with('success', 'Actualizado com sucesso!');
    }

    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->back()->with('success', 'Deletado com sucesso!');
    }

    /**
     * GERAR NÚMERO CARTÃO
     */
    private function generateStudentNumber()
    {
        $number = 'IJ-' . date('Y') . '-' . str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT);

        return $number;
    }

    /* Tornar um estudante como finalista */
    public function setFinalist(Student $student)
    {
        $student->status = true;
        $student->secret_code = str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT);
        $student->save();

        return redirect()->back()->with('success', 'O aluno ' . $student->name . ' finalizou o curso de ' . $student->course->name . '. Agora podes baixar o certificado!');
    }

    /* baixar certificado */
    public function certificate(Student $student)
    {
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
        return $pdf->stream($student->code . '_certificado_do_curso_de_' . $courseName . '.pdf');
    }
}
