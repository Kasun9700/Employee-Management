<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

// Insert

class EmployeeController extends Controller
{
    public function store(Request $request){

        $employee= new Employee;
         
        $employee-> eid =$request->eid;
        $employee-> name =$request->name;
        $employee-> address =$request->address;
        $employee-> dob =$request->dob;
        $employee-> email =$request->email;
        $employee-> depid =$request->depid;
        $employee-> desid =$request->desid;
        $employee-> save();

        $data=Employee::all();
       
         return view('employees')-> with ('employees', $data);
  
    }
            
    // Delete

    public function deleteemployee($id){

        $employee=Employee::find($id);
        $employee->delete();
        return redirect()->back();
    }


    //view

    public function getAll(){
        $data=Employee::all();
        return response()->json($data);
        
    }


// update 

    public function updateemployeeview($id){
        

        $employee=Employee::find($id);
        return view('updateemployee')-> with ('employeedata', $employee);
    }

    public function updateemployee(Request $request){

       $id = $request->id;
   
        $data= Employee::find($id);

        $data-> eid =$request->eid;
        $data-> name =$request->name;
        $data-> address =$request->address;
        $data-> dob =$request->dob;
        $data-> email =$request->email;
        $data-> depid =$request->depid;
        $data-> desid =$request->desid;
        $data-> save();

       $datas=Employee::all(); 

       return view('employees')-> with ('employees', $datas);
    }


}
