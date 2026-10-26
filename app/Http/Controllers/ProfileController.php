<?php

namespace App\Http\Controllers;

use App\Models\Admission;
use App\Models\Scholarship;
use App\Models\Student;
use App\Models\Profile;
use Illuminate\Http\Request;


class ProfileController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:profiles,email',
            'phn_number' => 'required|regex:/^01[3-9]\d{8}$/',
            'birth_date' => 'required|date',
            'batch' => 'required',
            'program' => 'required',
            'ad_date' => 'required|date',
            'bs_regi' => 'required|unique:profiles,bs_regi',
        ]);

        $profile = new Profile();
        $profile->email = $request->email;
        $profile->phn_number = $request->phn_number;
        $profile->birth_date = $request->birth_date;
        $profile->batch = $request->batch;
        $profile->program = $request->program;
        $profile->ad_date = $request->ad_date;
        $profile->bs_regi = $request->bs_regi;
        $profile->save();

        flash()->success('successfully insert data');

        return redirect()->route('profile.index');
    }
    //index page//
    public function index()
    {
        $profile = Profile::latest()->first();
        $scholarship = Scholarship::latest()->first();
        $admission = Admission::latest()->first();
        $student = Student::latest()->first();
        return view('layout.profile.index', compact('profile', 'scholarship', 'admission', 'student'));
    }
}
