<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;


class CourseController extends Controller
{
    public function index(){
        echo "Hello Class from Laravel Controller!";
    }

    public function kuchb(){

        $abc="Hello I came from Controller";
        $name="Muhammad Burhan";
        $age=4;
        $is_admin=false;
        $students=[];
        for($i=0;$i<20;$i++){
            $students[]="Student ".$i+1;
        }

        $columns[]=['img'=>'https://edu.abidingtech.com/assets/images/others/evolution.png','title'=>'ROBOTICS'];
        $columns[]=['img'=>'https://edu.abidingtech.com/assets/images/others/fypsmall.png','title'=>'FYP Preps'];
        $columns[]=['img'=>'https://edu.abidingtech.com/assets/images/others/webDevz.png','title'=>'Web Development'];
        $columns[]=['img'=>'https://edu.abidingtech.com/assets/images/others/internshop.png','title'=>'INTERNSHIP'];
        $columns[]=['img'=>'https://edu.abidingtech.com/assets/images/others/careers.png','title'=>'CAREER COUNSELING
        '];

        $employees=Employee::get();

        return view('course',compact('employees','abc','name','age','is_admin','students','columns'));
    }

    public function single_course($id){

        return 'Value =>'.$id;
    }
    public function product($name,$price,$discount){

        return 'Name =>'.$name.', Price'.$price.', Discount=>'.$discount;
    }

    public function store(Request $request){

        // $koib=$request->all();
        $koib['full_name']=$request->full_name;
        $koib['phone']=$request->phone;

        Employee::create($koib);

        return redirect()->route('kuchb');

    }
    public function destroy($id){
        $employee=Employee::find($id);
        $employee->delete();
        return redirect()->route('kuchb');
    }
    public function edit($id){
        $employee=Employee::find($id);
        // $employee->delete();
        return view('course.edit',compact('employee'));
    }

    public function update(Request $request,$id){
        $employee=Employee::find($id);
        // $koib=$request->all();
        $koib['full_name']=$request->full_name;
        $koib['phone']=$request->phone;
        $employee->update($koib);


        return redirect()->route('kuchb');

    }
}
