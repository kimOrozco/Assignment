<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Student;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class StudentsController extends Controller
{
    public function showStudentsForm (Request $request){
        return view ('registration-form');
    }

    public function processRegistration(Request $request){
        $first_name = $request->first_name;
        $course = $request->course;
        $student_number = $request->student_number;
        $address = $request->address;
        $guardian = $request->guardian;

        $student = new Student;
        $student->first_name = $first_name;
        $student->course = $course;
        $student->student_number = $student_number;
        $student->address = $address;
        $student->guardian = $guardian;
        $student->save();

        return view('registration-complete', [
            'first_name' => $first_name,
            'course' => $course,
            'student_number' => $student_number,
            'address' => $address,
            'guardian' => $guardian
        ]);
    }

    public function showList(){
        $users = Student::orderBy('id')->get();

        return view('show-students',[
            'users' => $users]);
    }
    public function delete($id){
        // $stud = "DELETE FROM students WHERE id = :id";
        // return redirect('/show-list');

        $stud = Student::find( $id );
        $stud ->delete();  
        return redirect('/show-list');
    }

    public function showEdit(Request $request){
        return view('update', [
        'id' => $request ->studentid,
        'first_name' => $request ->fullname,
        'course' => $request ->course,
        'student_number' => $request ->studentnumber,
        'address' => $request ->address,
        'guardian' => $request ->guardian
        ]);
    }
    public function showUpdate(Request $request, $id){
        $students = Student::find($id);
        $students->first_name = $request->fullname;
        $students->course = $request->course;
        $students->student_number = $request->studentnumber;
        $students->address = $request->address;
        $students->guardian = $request->guardian;
        $students->save();
        return redirect('/show-list');
    }
}

