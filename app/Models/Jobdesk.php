<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jobdesk extends Model
{
    protected $guarded = [];

    protected $casts = [
        'created_at' => 'datetime:H-i-s',
    ];
}
