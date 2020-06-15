<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 

use App\Models\Student;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('pages.students.index',[
            'students' => $students
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("pages.students.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Student::create($request->all());
        return redirect('/students')->with('status', 'Data Mahasiswa berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('pages.students.show', compact ('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student) 
    { 
        return view('pages.students.edit', compact('student')); 
    } 
 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $request->validate(['name'=>'required','nim' => 'required|size:4']);
        Student::where('id', $student->id)
        ->update(
            ['name' => $request->name,
            'nim' => $request->nim,
            'email' => $request->email,
            'jurusan' => $request->jurusan
            ]
        );
        return redirect('/students')->with('status', 'Data Mahasiswa Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        Student::destroy($student->id);

        return redirect("/students")->with('status','Data Mahasiswa Berhasil Dihapus!');
    }
    public function search(Request $request)
    {   
        $cari = $request->search;
        $post = DB::table('students')->where('name','like',"%".$cari."%")->paginate(); 
        return view('pages.students.index',['students' => $post]);     
    }
}
