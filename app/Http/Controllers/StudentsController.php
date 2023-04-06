<?php

namespace App\Http\Controllers;

use App\Models\students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('insert');
    }

   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $students=new students;
        $students->name=$request->get('name');
        $students->class=$request->get('class');
        $students->roll_no=$request->get('roll_no');
        $students->address=$request->get('address');
        $students->dob=$request->get('dob');

        $students->save();
        return redirect('show');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Students $students)
    {
        $students=Students::all();
        return view('show',['students'=>$students]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Students $students,$id)
    {
        $students=Students::find($id);
        return view('edit',['students'=>$students]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Students $students,$id)
    {
        $students=Students::find($id);
        $students->name=$request->get('name');
        $students->class=$request->get('class');
        $students->roll_no=$request->get('roll_no');
        $students->address=$request->get('address');
        $students->dob=$request->get('dob');

        $students->save();
        
        return redirect('show');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Students $students,$id)
    {
        $student=Students::find($id);
        $student->delete();
        return redirect('show');
    }
}
