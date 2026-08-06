<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $response['courses'] = Course::orderByDesc('id')->get();
        $response['levels'] = [
            'beginner' => 'Iniciante',
            'intermediate' => 'Intermediário',
            'advanced' => 'Avançado'
        ];

        return view('_admin.courses.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $response = [
            'categories' => Category::all(),
            'teachers' => Teacher::all(),
        ];
        return view('_admin.courses.create.index', $response);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price' => 'required|numeric|min:0',
            'status' => 'required|in:published,draft',
            'category_id' => 'required|exists:categories,id',
            'duration' => 'nullable|string|max:255',
            'level' => 'required|in:beginner,intermediate,advanced',
            'teacher_id' => 'nullable|exists:teachers,id',
        ], [
            'name.required' => 'O campo nome é obrigatório.',
            'price.required' => 'O campo preço é obrigatório.',
            'price.numeric' => 'O campo preço deve ser um número.',
            'price.min' => 'O campo preço deve ser um valor positivo.',
            'status.required' => 'O campo status é obrigatório.',
            'status.in' => 'O campo status deve ser "published" ou "draft".',
            'category_id.required' => 'O campo categoria é obrigatório.',
            'category_id.exists' => 'A categoria selecionada é inválida.',
            'duration.string' => 'O campo duração deve ser uma string.',
            'duration.max' => 'O campo duração deve ter no máximo 255 caracteres.',
            'level.required' => 'O campo nível é obrigatório.',
            'level.in' => 'O campo nível deve ser "Iniciante", "Intermediário" ou "Avançado".',
            'teacher_id.exists' => 'O formador selecionado é inválido.',
        ]);

        $course = new Course();
        $course->name = $request->name;
        $course->description = $request->description;
        $course->price = $request->price;
        $course->status = $request->status;
        $course->category_id = $request->category_id;
        $course->duration = $request->duration;
        $course->level = $request->level;
        $course->teacher_id = $request->teacher_id;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $imagePath = $image->storeAs('courses', $imageName, 'public');
            $course->image = $imagePath;
        }

        $course->save();

        return redirect()->route('admin.course.index')->with('success', 'Curso criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        $response = [
            'course' => $course,
            'levels' => [
                'beginner' => 'Iniciante',
                'intermediate' => 'Intermediário',
                'advanced' => 'Avançado'
            ]
        ];
        return view('_admin.courses.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        $response = [
            'course' => $course,
            'categories' => Category::where('id', '!=', $course->category_id)->get(),
            'teachers' => Teacher::where('id', '!=', $course->teacher_id)->get(),
            'levels' => [
                'beginner' => 'Iniciante',
                'intermediate' => 'Intermediário',
                'advanced' => 'Avançado'
            ]
        ];
        return view('_admin.courses.edit.index', $response);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            /* 'slug' => 'required|string|max:255|unique:courses,slug,' . $course->id, */
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'price' => 'required|numeric|min:0',
            'status' => 'required|in:published,draft',
            'category_id' => 'required|exists:categories,id',
            'duration' => 'required|string|max:255',
            'level' => 'required|in:beginner,intermediate,advanced',
            'teacher_id' => 'nullable|exists:teachers,id',
        ], [
            'name.required' => 'O campo nome é obrigatório.',
            'price.required' => 'O campo preço é obrigatório.',
            'price.numeric' => 'O campo preço deve ser um número.',
            'price.min' => 'O campo preço deve ser um valor positivo.',
            'status.required' => 'O campo status é obrigatório.',
            'status.in' => 'O campo status deve ser "published" ou "draft".',
            'category_id.required' => 'O campo categoria é obrigatório.',
            'category_id.exists' => 'A categoria selecionada é inválida.',
            'duration.required' => 'O campo duração é obrigatório.',
            'duration.string' => 'O campo duração deve ser uma string.',
            'duration.max' => 'O campo duração deve ter no máximo 255 caracteres.',
            'level.required' => 'O campo nível é obrigatório.',
            'level.in' => 'O campo nível deve ser "Iniciante", "Intermediário" ou "Avançado".',
            'teacher_id.exists' => 'O formador selecionado é inválido.',
        ]);

        $course->name = $request->name;
        $course->description = $request->description;
        $course->price = $request->price;
        $course->status = $request->status;
        $course->category_id = $request->category_id;
        $course->duration = $request->duration;
        $course->level = $request->level;
        $course->teacher_id = $request->teacher_id;

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            // Exclui a imagem antiga se existir
            if ($course->image) {
                Storage::disk('public')->delete($course->image);
            }
            // Salva a nova imagem
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $imagePath = $image->storeAs('courses', $imageName, 'public');
            $course->image = $imagePath;
        }

        $course->update();

        return redirect()->route('admin.course.index')->with('success', 'Curso atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {

        // Exclui a imagem associada ao curso, se existir
        if ($course->image) {
            Storage::disk('public')->delete($course->image);
        }

        $course->delete();

        return redirect()->back()->with('success', 'Curso excluído com sucesso!');
    }

    
}
