<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Course;
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
        
        return view('_admin.courses.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('_admin.courses.create.index', compact('categories'));
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
            /* 'slug' => 'required|string|max:255|unique:courses', */
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price' => 'required|numeric|min:0',
            'status' => 'required|in:published,draft',
            'category_id' => 'required|exists:categories,id',
        ]);

        $course = new Course();
        $course->name = $request->name;
        $course->slug = $request->slug;
        $course->description = $request->description;
        $course->price = $request->price;
        $course->status = $request->status;
        $course->category_id = $request->category_id;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $imagePath = $image->storeAs('courses', $imageName, 'public');
            $course->image = $imagePath;
        }

        $course->save();

        return redirect()->route('admin.courses.index')->with('success', 'Curso criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        return view('_admin.courses.details.index', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        $categories = Category::all();
        return view('_admin.courses.edit.index', compact('course', 'categories'));
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
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price' => 'required|numeric|min:0',
            'status' => 'required|in:published,draft',
            'category_id' => 'required|exists:categories,id',
        ]);

        $course->name = $request->name;
        $course->slug = $request->slug;
        $course->description = $request->description;
        $course->price = $request->price;
        $course->status = $request->status;
        $course->category_id = $request->category_id;

        if ($request->hasFile('image')) {
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

        $course->save();

        return redirect()->route('admin.courses.index')->with('success', 'Curso atualizado com sucesso!');  
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
