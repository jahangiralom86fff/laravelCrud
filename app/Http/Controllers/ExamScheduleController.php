<?php

namespace App\Http\Controllers;

use App\Models\ExamSchedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExamScheduleController extends Controller
{
    public function create()
    {
        $examNames = DB::table('exam_schedules')
            ->select('exam_name')
            ->distinct()
            ->pluck('exam_name');

        $semesters = DB::table('exam_schedules')
            ->select('semester')
            ->distinct()
            ->pluck('semester');

        $subjects = DB::table('exam_schedules')
            ->select('subject_name')
            ->distinct()
            ->pluck('subject_name');

        $courseCodes = DB::table('exam_schedules')
            ->select('course_code')
            ->distinct()
            ->pluck('course_code');

        return view('layout.shedule.create', compact(
            'examNames',
            'semesters',
            'subjects',
            'courseCodes'
        ));
    }
    public function store(Request $request)
    {
        
    }
}