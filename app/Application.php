<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        'appointment_date',
        'application_token',
        'personal_message',
        'counsellor',
        'application_status',
    ];
}
