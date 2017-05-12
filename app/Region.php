<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    public function tournament()
    {
    	return $this->hasMany(Tournament::class);
    }

    public function regionTexts()
    {
    	return $this->hasMany(RegionTexts::class);
    }
}
