<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public function Brand (){
        return $this-> belongsTo(Brand::Class);
}
    use SoftDeletes;
}
