<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
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
        return view('_admin.students.edit.index', compact('student'));
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
}
