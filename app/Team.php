<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public function coach()
    {
        return $this->belongsTo(User::class);
    }

    public function members()
    {
        return $this->hasMany(Member::class);
    }

    public function user()
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
