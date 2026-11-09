<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    protected $fillable = [
        'title',
        'start_date',
        'programs',
    ];

    protected $casts = [
        'programs' => 'array',
        'start_date' => 'date',
    ];
}