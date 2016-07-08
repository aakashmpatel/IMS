<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Students;

class Jobs extends Model
{
    public function students(){
        $this->belongsToMany('students');
    }
}
