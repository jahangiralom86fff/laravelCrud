<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    protected $fillable = [
        'name',
        'subject',
        'roll',
        'regi',
        'session_year',
        'fee',
        'payment_way',
    ];
}
