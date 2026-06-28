<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
        return view('_admin.students.create.index');
    }

    public function store(Request $request)
    {
       $request->validate([
            'client_name' => 'required|string|max:255',
            'client_email' => 'nullable|email|max:255',
            'client_phone' => 'nullable|string|max:13',
            'course_id' => 'required|exists:courses,id'
        ], [
            'client_name.required' => 'Nome do Cliente é obrigatório',
            'client_email.email' => 'Email não é válido',
            'client_phone.max' => 'Excedeu o número caracteres para um número válido',
            'course_id.required' => 'Id do curso não identificado'
        ]);

        if (empty($request->client_email) && empty($request->client_phone)) {
            return redirect()->back()->with('error', 'Não podemos avançar sem o email ou número de telefone do cliente!');
        }

        $student = new Student();
        
        $student->client_name = $request->client_name;
        $student->client_email = $request->client_email;
        $student->client_phone = $request->client_phone;
        $student->course_id = $request->course_id;

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
            'client_name' => 'required|string|max:255',
            'client_email' => 'nullable|email|max:255',
            'client_phone' => 'nullable|string|max:13',
            'course_id' => 'required|exists:courses,id'
        ], [
            'client_name.required' => 'Nome do Cliente é obrigatório',
            'client_email.email' => 'Email não é válido',
            'client_phone.max' => 'Excedeu o número caracteres para um número válido',
            'course_id.required' => 'Id do curso não identificado'
        ]);

        if (empty($request->client_email) && empty($request->client_phone)) {
            return redirect()->back()->with('error', 'Não podemos avançar sem o email ou número de telefone do cliente!');
        }
        
        $student->client_name = $request->client_name;
        $student->client_email = $request->client_email;
        $student->client_phone = $request->client_phone;
        $student->course_id = $request->course_id;

        $student->update();

        return redirect()->route('admin.student.index')->with('success', 'Actualizado com sucesso!');
    }

    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->back()->with('success', 'Deletado com sucesso!');
    }
}
