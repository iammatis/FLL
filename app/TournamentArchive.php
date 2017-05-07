<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TournamentArchive extends Model
{
    public function team()
    {
    	return $this->belongsTo(Team::class);
    }

    public function region()
    {
    	return $this->belongsTo(Region::class);
    }
}
