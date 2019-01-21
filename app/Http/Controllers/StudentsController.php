<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Models\Student;

class StudentsController extends BaseController {
    public function index(Request $req) {
        $students = Student::all();
        $data = [];
        $data['students'] = $students;
        return view('students.index', $data);
    }

    public function create(Request $req) {
        return view('students.create');
    }

    public function store(Request $req) {
        $studentInput = $req->input('student');
        $student = Student::create($studentInput);
        return redirect()->route('students.index');
    }
}
