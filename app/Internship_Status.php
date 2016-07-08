<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Students;

class Internship_Status extends Model
{
    public function students(){
        $this->belongsTo('App\Students');
    }
}
