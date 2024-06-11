<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
{
    $students = Student::all(); // Ambil semua data siswa
    return view('students.index', compact('students')); // Meneruskan data siswa ke tampilan
}

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'kelas' => 'required|string|max:255', // Validasi untuk kolom kelas
            'jurusan' => 'required|string|max:255',
            'point' => 'required|integer',
        ]);

        Student::create([
            'name' => $request->name,
            'kelas' => $request->kelas, // Pastikan ini diisi
            'jurusan' => $request->jurusan,
            'point' => $request->point,
        ]);

        return redirect()->route('students.index')->with('success', 'Student added successfully.');
    }

    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'kelas' => 'required|string|max:255', // Validasi untuk kolom kelas
            'jurusan' => 'required|string|max:255',
            'point' => 'required|integer',
        ]);

        $student->update([
            'name' => $request->name,
            'kelas' => $request->kelas, // Pastikan ini diisi
            'jurusan' => $request->jurusan,
            'point' => $request->point,
        ]);

        return redirect()->route('students.index')->with('success', 'Student updated successfully.');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted successfully.');
    }
}
