<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\studentmodel;

class studentcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $students=studentmodel::all();
        return view('students.index')->with('students',$students);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $input=$request->all();
        studentmodel::create($input);
        return redirect('student')->with('flashmessage','student added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student=studentmodel::find($id);
        return view('students.show')->with('student',$student);
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student=studentmodel::find($id);
        return view('students.edit')->with('students',$student);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
          $student=studentmodel::find($id);
          $input=$request->all();
          $student->update($input);

        return redirect('student')->with('flashmessage','student updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        studentmodel::destroy($id);
        return redirect('student')->with('flashmessage','Student deleted successfully');
    }
}
