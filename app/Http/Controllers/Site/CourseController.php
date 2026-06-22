<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Students;

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
            'client_name' => 'required|string|max:255',
            'client_email' => 'nullable|email|max:255',
            'client_phone' => 'nullable|string|max:13',
            'service_id' => 'required|exists:services,id'
        ], [
            'client_name.required' => 'Nome do Cliente é obrigatório',
            'client_email.email' => 'Email não é válido',
            'client_phone.max' => 'Excedeu o número caracteres para um número válido',
            'service_id.required' => 'Id do Serviço não identificado'
        ]);

        if (empty($request->client_email) && empty($request->client_phone)) {
            return redirect()->back()->with('error', 'Não podemos avançar sem o email ou número de telefone do cliente!');
        }

        Students::create([
            'client_name' => $request->client_name,
            'client_email' => $request->client_email,
            'client_phone' => $request->client_phone,
            'course_id' => $request->course_id
        ]);

        return redirect()->route('site.home')->with('success', 'Enviado com sucesso!');
    }
}
