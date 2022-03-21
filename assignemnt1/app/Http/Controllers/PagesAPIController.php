<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course;
use App\Models\department;

class PagesAPIController extends Controller
{
    //
    public function deptlist(){
            $dept=department::all();
            return $dept;
    }
    public function adddept(Request $req){
        try{
            $dept = new  department;
            $dept->d_name = $req->d_name;
            if($dept->save()){

                return response()->json(["msg"=>"Added Successfully"],200);
            }
        }
        catch(\Exception $dept){
            return response()->json(["msg"=>"Could not add"],500);
        }
        
        
        
    }
    public function courselist(){
        $course=course::all();
        return $course;
}

public function addcourse(Request $req){
    try{
        $course= new  course;
        $course->d_name = $req->d_name;
        if($course->save()){

            return response()->json(["msg"=>"Added Successfully"],200);
        }
    }
    catch(\Exception $course){
        return response()->json(["msg"=>"Could not add"],500);
    }
    
    
    
}
public function deptupdate(Request $req){
    try{
        $dept = department::where('id','=',$req->id)->first();
        $dept->id = $req->id;
        $dept->d_name = $req->d_name;
        if($dept->save()){

            return response()->json(["msg"=>"Updated Successfully"],200);
        }
    }
    catch(\Exception $dept){
        return response()->json(["msg"=>"Could not Update"],500);
    }
    
    
    
}
public function courseupdate(Request $req){
    try{
        $course = course::where('id','=',$req->id)->first();
        $course ->departments_id = $req->departments_id;
        $course ->c_name = $req->c_name;
        if($course ->save()){

            return response()->json(["msg"=>"Updated Successfully"],200);
        }
    }
    catch(\Exception $course ){
        return response()->json(["msg"=>"Could not Update"],500);
    }
    
    
    
}
public function deptdelete(){
    try{
    $dept=department::where('id','=',$req->id)->first();
    $dept->delete();
    if($dept ->save()){

        return response()->json(["msg"=>"Deleted Successfully"],200);
    }
    }
catch(\Exception $dept ){
    return response()->json(["msg"=>"Could not Delete"],500);
}
}
public function coursedelete(){
    try{
    $course=course::where('id','=',$req->id)->first();
    $course->delete();
    if($course ->save()){

        return response()->json(["msg"=>"Deleted Successfully"],200);
    }
    }
catch(\Exception $course ){
    return response()->json(["msg"=>"Could not Delete"],500);
}
}
}

