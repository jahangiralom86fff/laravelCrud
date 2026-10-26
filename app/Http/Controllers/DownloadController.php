<?php

namespace App\Http\Controllers;

use App\Models\Download;
use Illuminate\Http\Request;
use App\Models\Admission;
use App\Models\Student;

class DownloadController extends Controller
{
    public function pdfview()
    {
        $admissions = Admission::latest()->get();
        $students = Student::latest()->get();

        return view('layout.download.pdfview', compact('admissions', 'students'));
       
    }
    public function index()
    {
        $admissions = Admission::latest()->get();
        $students = Student::latest()->get();

        return view('layout.download.index', compact('admissions', 'students'));
    }
    public function create()
    {
        $admissions = Admission::latest()->get();
        $students = Student::latest()->get();
        return view('layout.download.create', compact('admissions','students'));
    } 
}
