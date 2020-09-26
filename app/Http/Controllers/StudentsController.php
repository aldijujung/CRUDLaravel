<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

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
        //cara ngirim data keview ada dua cara
        // return view('students.index', ['students' => $students]);
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;

        //cara inster pertama
        //buat object Student
        // $student = new Student;
        // //isikan
        // $student->nama = $request->nama;
        // $student->nrp = $request->nrp;
        // $student->email = $request->email;
        // $student->jurusan = $request->jurusan;
        // //simpan jika sudah terisi
        // $student->save();

        // Cara Inset Kedua
        // dengan catatan harus membuat protected $fillabale = ['array'] didalam model
        // Student::create([
        //     'nama' => $request->nama,
        //     'nrp' => $request->nrp,
        //     'email' => $request->email,
        //     'jurusan' => $request->jurusan
        // ]);

        //validasi laravel
        $request->validate([
            'nama' => 'required',
            'nrp' => 'required|size:6',
            'email' => 'required',
            'jurusan' => 'required',
        ]);

        //cara insert ketiga
        //langung input kedalam db yang sudah ditentukan dalam $fillable dimodel
        Student::create($request->all());
        return redirect('/students')->with('status', 'Data Berhasil Diinput');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        // return $s;
        return view('students.show', ['student' => $student]);
        // return view('students.show', compact('s'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'nama' => 'required',
            'nrp' => 'required|size:6',
            'email' => 'required',
            'jurusan' => 'required',
        ]);
        Student::where('id', $student->id)
            ->update([
                'nama' => $request->nama,
                'nrp' => $request->nrp,
                'email' => $request->email,
                'jurusan' => $request->jurusan,
            ]);
        return redirect('/students')->with('status', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //distroy untuk menghapus
        Student::destroy($student->id);
        return redirect('/students')->with('status', 'Data Berhasil Dihapus');
    }
}
