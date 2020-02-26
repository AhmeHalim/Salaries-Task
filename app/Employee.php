<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $table ='employees';

    public function department(){
      return $this->belongsTo('App\Department');
    }

}
