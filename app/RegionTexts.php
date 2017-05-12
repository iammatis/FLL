<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegionTexts extends Model
{
    public function region()
    {
    	return $this->belongsTo(Region::class);
    }
}
