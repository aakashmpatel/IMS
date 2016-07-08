<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Students;

class Education extends Model
{
    public function students(){
        $this->belongsTo('App\Students');
    }
}
