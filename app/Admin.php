<?php

namespace App;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use App\Notification;
use App\Students;
use App\Internship;
use App\Education;
use App\SemesterRegistered;
use App\Jobs;
use App\Internship_Status;

class Admin extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;

    public function notification(){
        $this->hasMany('App\Notification');
    }

    public function students(){
        $this->hasMany('App\Students');
    }

    public function internships(){
        $this->hasMany('App\Internship');
    }

    public function internship_status(){
        $this->hasOne('App\Internship_Status');
    }

    public function jobs(){
        $this->belongsToMany('App\Jobs');
    }

    public function education(){
        $this->hasMany('App\Education');
    }

    public function semester_registered(){
        $this->hasOne('App\SemesterRegistered');
    }

}
