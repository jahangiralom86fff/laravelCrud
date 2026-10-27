<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExamSchedule extends Model
{
    protected $fillable = [
        'exam_name',
        'semester',
        'subject_name',
        'course_code',
        'year',
    ];
}
