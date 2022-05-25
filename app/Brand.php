<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public function Cars (){
            return $this-> hasMany(Car::Class);
        }
use SoftDeletes;
}
