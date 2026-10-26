<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Scholarship extends Model
{
    protected $fillable = [
        'name',
        'image',
        'phone_number',
        'f_name',
        'm_name',
        'date',
        'nationality',
        'gender',
        'marital_status',
        'address',
        'email',
        'ssc',
        'institute',
        'hsc',
        'hsc_institute',
        'hours',
        'h_degree',
        'board',
        'pass_year',
        'group',
        'hsc_group',
        'hsc_year',
        'hsc_board',
    ];
}
