<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Counsellor extends Model
{
    public function applications() {
        return $this->hasMany('App\Application');
    }
    protected $fillable = [
        'counsellor',
        'counsellor_id',
        'application_details',
    ];

    protected $casts = [
        'application_details' => 'array',
    ];
}
