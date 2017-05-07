<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    public function tournament()
    {
    	return $this->hasMany(Tournament::class);
    }
}
