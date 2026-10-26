<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'subject' => 'required',
            'roll' => 'required|integer|unique:students,roll',
            'regi' => 'required|integer|unique:students,regi',
        ]);

        $student = new Student();
        $student->name = $request->name;
        $student->subject = $request->subject;
        $student->roll = $request->roll;
        $student->regi = $request->regi;
        $student->save();

        flash()->success('<p class="text-danger">Application created successfully!</p>');
        return redirect()->route('student.list');
    }

    public function show($id)
    {
        $student = Student::findOrFail($id);
        return view('layout.show', compact('student'));
    }

    public function index()
    {
        $students = Student::all();
        return view('layout.show', compact('students'));
    }

    //edit page method//
    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('layout.edit', compact('student'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'subject' => 'required',
            'roll' => 'required|integer|unique:students,roll',
            'regi' => 'required|integer|unique:students,regi',
        ]);

        //student find//
        $student = Student::findOrFail($id);

        $student->name = $request->name;
        $student->subject = $request->subject;
        $student->roll = $request->roll;
        $student->regi = $request->regi;

        $student->save();
        
        flash()-> success('Application Updated successfully');

        return redirect('/students')->with('success', 'Student updated successfully');
    }

    //delete data//
    public function delete($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect ()->back()->with('success', 'Data Delete successfully');
    }

    //chat.js add//
    public function chart()
    {
        $labels = ['Bangla', 'English', 'Math', 'Physics'];
        $data = [12, 19, 8, 15];

        return view('chart', compact('labels', 'data'));
    }
}