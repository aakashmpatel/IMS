<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use App\Students;
use App\Admin;
use App\Internship_Type;

class Internship extends Model
{
    protected $table = "internships";
    public function admin(){
        $this->belongsTo('admin');
    }

    public function internship_type(){
        $this->hasOne('App\Internship_Type');
    }
}
