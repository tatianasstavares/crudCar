<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

// use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    public function Brand()
    {
        return $this->belongsTo(Brand::Class);
    }
    use SoftDeletes;
}
