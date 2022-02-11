<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function login(){
        return view('login');
    }
    public function student(){
        $courses=array();

        $course=array(
            "course1" => " ATP3 ",
            "course2" => " ATP2 ",
            "course3" => " Web Technologies ",
            "course4" => " Programming With Python "
           
        );

            $course=(object) $course;
            $courses[]=$course;


           
              return view('student')->with('course',$courses);
       
    }
    public function admin(){
        $courses=array();

        $course=array(
            "course1" => " ATP3 ",
            "course2" => " ATP2 ",
            "course3" => " Web Technologies ",
            "course4" => " Programming With Python "
           
        );

            $course=(object) $course;
            $courses[]=$course;


          
        return view('admin')->with('course',$courses);
    }
    public function homepage(){
     
        $courses=array();

        $course=array(
            "course" => " Programming With Python ",
            "instructor"=> " Mr. David ",
            "duration"=> " 4 Months ",
            "starts"=> " 10th February 2022"
        );

            $course=(object) $course;
            $courses[]=$course;


            $course=array(
                "course" => " Programming With C++ ",
                "instructor"=> " Mr. David ",
                "duration"=> " 4 Months ",
                "starts"=> " 15th February 2022"
            );
    
            $course=(object) $course;
            $courses[]=$course;

        
        return view('homepage')->with('course',$courses);
       
    }
    
    public function contact(){
        $contacts=array();

            $contact=array(
              "name"=>  "Rayhan Uddin",
               "position"=> "Co-ordinator",
                "email" => "r.u@st.edu" 
            );

        $contact=(object) $contact;
        $contacts[]=$contact;


            $contact=array(
                "name"=> "Tanvir Ahmed",
                "position"=>"Developer",
                "email" =>"t.a@st.edu"

            );
    
            $contact=(object) $contact;
            $contacts[]=$contact;

        
        return view('contact')->with('contact',$contacts);
    }
  
}
