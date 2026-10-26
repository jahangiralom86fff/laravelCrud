<?php

namespace App\Http\Controllers;

use App\Models\Admission;
use app\Http\Controllers\AdmissionController;
use Illuminate\Http\Request;


class AdmissionController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'subject' => 'required',
            'roll' => 'required|integer|unique:admissions,roll',
            'regi' => 'required|integer|unique:admissions,regi',
            'session_year' => 'required',
            'fee' => 'required',
            'payment_way' => 'required',
        ]);

        $admission = new Admission();
        $admission->name = $request->name;
        $admission->subject = $request->subject;
        $admission->roll = $request->roll;
        $admission->regi = $request->regi;
        $admission->fee = $request->fee;
        $admission->session_year = $request->session_year;
        $admission->payment_way = $request->payment_way;

        $admission->save();

        flash()->success('Successfully saved');

        return redirect()->route('admission.index');
    }
    //view method//
    public function index()
    {
        $admissions = Admission::all();
        return view('layout.payment.index', compact('admissions'));
    }

    //edit page//
    public function edit($id){
        $row = Admission::findOrFail($id);
        return view('layout.payment.edit', compact('row'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'subject' => 'required',
            'roll' => 'required|integer',
            'regi' => 'required|integer',
            'session_year' => 'required',
            'fee' => 'required',
            'payment_way' => 'required',
        ]);

        $admission = Admission::findOrFail($id);

        $admission->name = $request->name;
        $admission->subject = $request->subject;
        $admission->roll = $request->roll;
        $admission->regi = $request->regi;
        $admission->fee = $request->fee;
        $admission->session_year = $request->session_year;
        $admission->payment_way = $request->payment_way;

        $admission->save();

        flash()->success('Successfully saved');
        return redirect()->route('admission.index');
    }
    //delete//
    public function delete($id)
    {
        $admission = Admission::findOrFail($id);
        $admission->delete();

        return redirect()->back()->with('success','Data Delete successfully delete');
    }
    
}
