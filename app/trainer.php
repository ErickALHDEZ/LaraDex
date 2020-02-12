<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class trainer extends Model
{
    protected $fillable = ['name','avatar'];
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
