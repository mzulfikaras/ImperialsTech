<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $guarded = [];

    public function report(){
        return $this->hasMany(Report::class,'client_id','id');
    }
}
