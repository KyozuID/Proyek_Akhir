<?php
// Untuk user
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class UserController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('user.index', compact('students'));
    }

    public function info()
    {
        return view('user.info');
    }
}
