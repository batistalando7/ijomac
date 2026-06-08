<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response['teachers'] = Teacher::orderByDesc('id')->get();
        return view('_admin.teachers.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('_admin.teachers.create.index');
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
            'name' => 'required',
            'email' => 'required|email|unique:teachers,email',
            'phone' => 'nullable',
            'address' => 'nullable',
            'entries_date' => 'nullable|date',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'qualification' => 'nullable|string|max:255',
        ]);

        $teacher = new Teacher();

        if($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imageName = time() . '_' . $request->file('photo')->getClientOriginalName();
            $path = $image->storeAs('public/teachers', $imageName, 'public');
            $teacher->photo = $path;
        }

        $teacher->name = $request->name;
        $teacher->email = $request->email;
        $teacher->phone = $request->phone;
        $teacher->address = $request->address;
        $teacher->entries_date = Carbon::parse($request->entries_date)->format('Y-m-d');
        $teacher->qualification = $request->qualification;
        $teacher->save();

        return redirect()->route('admin.teacher.index')->with('success', 'Formador criado com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        return view('_admin.teachers.details.index', compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        return view('_admin.teachers.edit.index', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:teachers,email,' . $teacher->id,
            'phone' => 'nullable',
            'address' => 'nullable',
            'entries_date' => 'nullable|date',
            'qualification' => 'nullable|string|max:255',
        ]);

       if($request->hasFile('photo')) {
        if($teacher->photo) {
            Storage::disk('public')->delete($teacher->photo);
        }
        $image = $request->file('photo');
        $imageName = time() . '_' . $request->file('photo')->getClientOriginalName();
        $path = $image->storeAs('public/teachers', $imageName, 'public');
        $teacher->photo = $path;
       }
        $teacher->name = $request->name;
        $teacher->email = $request->email;
        $teacher->phone = $request->phone;
        $teacher->address = $request->address;
        $teacher->entries_date = Carbon::parse($request->entries_date)->format('Y-m-d');
        $teacher->qualification = $request->qualification;
        $teacher->save();

        return redirect()->route('admin.teacher.index')->with('success', 'Formador atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return redirect()->route('admin.teacher.index')->with('success', 'Formador eliminado com sucesso.');
    }
}
