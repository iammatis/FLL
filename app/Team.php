<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public function coach()
    {
        return $this->belongsToMany('App\Coach');
    }

    public function invoice()
    {
    	return $this->hasMany(Invoice::class);
    }
}
