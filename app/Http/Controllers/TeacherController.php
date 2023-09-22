<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.teacher.index',[
            'teachers' => Teacher::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'photo' => 'required|image|file|max:2048',
            'nip' => 'required|max:35|unique:teachers',
            'nik' => 'required|max:35|unique:teachers',
            'name'  => 'required|max:255',
            'address'  => 'required',
            'departemen' => 'required',
            'email'  => 'required|email:dns|unique:teachers',
            'phone_number'  => 'required',
            'joint_date' => 'required'
        ]);

        if ($request->file('photo')) {
            $validatedData['photo'] = $request->file('photo')->store('teacher-image');
        }


        Teacher::create($validatedData);

        return redirect('/admin/teacher')->with('success', 'Data Pengajar Baru Berhasil Di upload!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        return view('admin.teacher.edit',['teacher' => $teacher]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        $validatedData = $request->validate([
            'photo' => 'required|image|file|max:2048',
            'nip' => 'required|max:35',
            'nik' => 'required|max:35',
            'name'  => 'required|max:255',
            'address'  => 'required',
            'departemen' => 'required',
            'email'  => 'required|email:dns',
            'phone_number'  => 'required',
            'joint_date' => 'required'
        ]);

        if ($request->file('photo')) {
            $validatedData['photo'] = $request->file('photo')->store('teacher-image');
        }


        Teacher::where('id',$teacher->id)->update($validatedData);

        return redirect('/admin/teacher')->with('success', 'Data Pengajar Berhasil Di update!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        Teacher::destroy($teacher->id);
        
        return redirect('/admin/teacher')->with('success', 'Data Pengajar Berhasil Di hapus');
    }
}
