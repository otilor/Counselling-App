<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Counsellor extends Model
{
    protected $fillable = [
        'counsellor',
        'application_details',
    ];

    protected $casts = [
        'application_details' => 'array',
    ];
}
