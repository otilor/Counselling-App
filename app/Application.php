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
        'counsellor_id',
        'application_status',
    ];
}
