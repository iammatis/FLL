<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public function coach()
    {
        return $this->belongsTo(User::class);
    }

    public function invoice()
    {
    	return $this->hasMany(Invoice::class);
    }

    public function tournament()
    {
    	return $this->hasOne(Tournament::class);
    }    
}
