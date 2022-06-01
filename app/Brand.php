<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    public function Cars()
    {
        return $this->hasMany(Car::Class);
    }

    protected $fillable = [
        'name'
    ];

    use SoftDeletes;
}
