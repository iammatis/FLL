<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    public function team()
    {
    	return $this->belongsTo(Team::class);
    }
}
