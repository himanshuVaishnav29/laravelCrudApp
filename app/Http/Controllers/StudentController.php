<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller{
    //
    public function showAllStudents(){
        $allStudents=DB::table('students')
                            ->orderBy('name')
                            // ->get();
                            // ->simplePaginate(5);
                            ->paginate(5);
        return view('home',['data'=>$allStudents]);
        // return $allStudents;
    }

    public function showStudent(string $id){
        $student=DB::table('students')
                    ->select('name','city','age')
                    ->where('id',$id)
                    ->get();
        return $student;
        // dd($student);
    }

    public function addStudent(Request $req){
        $data=[
            'name'=>$req->name,
            'city'=> $req->city,
            'age'=> $req->age,
            'contact'=> $req->contact,
            'created_at' => now(),
            'updated_at' =>now()
        ];
        $student=DB::table('students')->insert($data);
        // if($student){
        //     echo "<h1>Data added successfully</h1>";
        // }
        // return $student;
        // dd($student);
        if($student){
            return redirect()->route('home');
        }else{
            echo "Error adding student";
        }
    }


    public function updatePage(string $id){
        $student = DB::table('students')
                        ->where('id',$id)
                        ->first();
                        // return $student;
        return view('update',['data'=>$student]); 
    }


    public function updateStudent(Request $req, string $id){
        $student=DB::table('students')
                    ->where('id',$id)
                    ->update([
                        'name'=>$req->name,
                        'city'=> $req->city,
                        'age'=> $req->age,
                        'contact'=> $req->contact,
                        'updated_at' =>now()
                    ]);
                    // return $student;
        if($student){
            return redirect()->route('home');
        }else{
            echo "Error adding student";
        }
    }

    public function deleteStudent(string $id){
        $student=DB::table('students')
                    ->where('id',$id)
                    ->delete();
        
        if($student){
            return redirect()->route('home');
        }else{
            echo "student deletion failed";
        }
    }
    
}
