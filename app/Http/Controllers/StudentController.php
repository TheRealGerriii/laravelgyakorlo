<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\School;


class StudentController extends Controller
{
    // public function students() {

    //     $students = Student::with("course")->get();
        
    //     foreach ($students as $student) {
    //         echo"<pre>";
    //         print_r( $student->name . " " );
    //         print_r( $student->course );
    //     }
        
    // }
    public function students() {

        $schools = School::with("student")->get();
        
        foreach ($schools as $school) {

            foreach($school->$student as $sc) {
                echo"<pre>";
                print_r($sc->name);
            }
            
        }
        
    }
}
