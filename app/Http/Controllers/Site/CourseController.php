<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Student;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::where('status', 'published')->orderByDesc('id')->paginate(6);

        return view('site.course.index', compact('courses'));
    }

    public function show(Course $course)
    {
        $response = [
            'course' => $course,
            'relatedCourses' => Course::where('category_id', $course->category_id)
                ->where('id', '!=', $course->id)
                ->where('status', 'published')
                ->orderByDesc('id')
                ->take(4)
                ->get(),
            'levels' => [
                'beginner' => 'Iniciante',
                'intermediate' => 'Intermediário',
                'advanced' => 'Avançado'
            ]
        ];
        return view('site.course.details', $response);
    }

    public function request(Course $course)
    {
        $response['course'] = $course;
        return view('site.course.request', $response);
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
        $student->secret_code = 'N/A';

        $student->save();

        return redirect()->route('site.home')->with('success', 'Enviado com sucesso!');
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
