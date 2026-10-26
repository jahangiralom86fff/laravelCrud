<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'email',
        'phn_number',
        'birth_date',
        'batch',
        'program',
        'ad_date',
        'bs_regi',
    ];
}
