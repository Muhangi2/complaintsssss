<?php

namespace App\Http\Controllers;

use App\Models\categories;
use Illuminate\Http\Request;
use App\Models\complaints;
use App\Models\course;
use App\Models\User;

class studentcontroller extends Controller
{
        ///userdashboard

        public function totalcomplaints(){
            $user=auth()->id();
           
            $categories=categories::where('category_id',$user);
            $allcomplaints=complaints::where('user_id',$user)->get();


            return  view('students.complaints.totalcomplaints.total',
            [
              'categories'=>$categories,
              'allcomplaints'=>$allcomplaints,
        ]);
        }

        public function responses(){
            return view('students.responses.totalresponses');
        }


        public function pendingcompliants(){
            return view('students.complaints.pending.pending');
        }

        public function userdashboard(){
            $user=auth()->id();

            $totalcomplaints=complaints::where('user_id',$user)->count();
            return view('students.index',['totalcomplaints'=> $totalcomplaints]);
        }



     //marks
    public function marksindex(){
   
        return view('students.complaints.marks.index');
    }

    public function storemarks(Request $request){
        $request->validate([
            'category_name' => 'required',
            'course_category' => 'required',
            'description' => 'required',
        ]);


        $category = new categories;
        $category->user_id = auth()->id();
        $category->category_name = $request->input('category_name');
        $category->save();   


        $course = new course;
        $course->user_id = auth()->id();
        $course->course_category = $request->input('course_category');
        $course->save();
        
       $complaint = new complaints;
       $complaint->user_id = auth()->id();
       $complaint->category_id = $category->id;
       $complaint->course_id = $course->id;
       $complaint->description = $request->input('description');
       $complaint->save();


    return redirect('/totalcomplaints')->with('success', 'Form submitted successfully.');
    

    }
    
    public function registrationindex(){
        return view('students.complaints.registration.index');
    }
    public function storeregistration(Request $request){
        $request->validate([
            'category_name' => 'required',
            'course_category' => 'required',
            'description' => 'required',
        ]);


        $category = new categories;
        $category->user_id = auth()->id();
        $category->category_name = $request->input('category_name');
        $category->save();   


        $course = new course;
        $course->user_id = auth()->id();
        $course->course_category = $request->input('course_category');
        $course->save();
        
       $complaint = new complaints;
       $complaint->user_id = auth()->id();
       $complaint->category_id = $category->id;
       $complaint->course_id = $course->id;
       $complaint->description = $request->input('description');
       $complaint->save();

       return redirect('/totalcomplaints')->with('success', 'Form submitted successfully.');
    }

    public function tutionindex(){
        return view('students.complaints.tution.index');
    }
    public function storetution(Request $request){
        $request->validate([
            'category_name' => 'required',
            'course_category' => 'required',
            'description' => 'required',
        ]);


        $category = new categories;
        $category->user_id = auth()->id();
        $category->category_name = $request->input('category_name');
        $category->save();   


        $course = new course;
        $course->user_id = auth()->id();
        $course->course_category = $request->input('course_category');
        $course->save();
        
       $complaint = new complaints;
       $complaint->user_id = auth()->id();
       $complaint->category_id = $category->id;
       $complaint->course_id = $course->id;
       $complaint->description = $request->input('description');
       $complaint->save();


       return redirect('/totalcomplaints')->with('success', 'Form submitted successfully.');
    

    }

    

}
