<?php
// App\Http\Controllers\User\DashboardController.php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Student;

class DashboardController extends Controller
{
    public function index()
    {
        $students = Student::all(); // Misalnya mengambil semua data siswa dari model Student
        return view('user.dashboard', compact('students'));
    }
}
