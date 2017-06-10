<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;
    use EntrustUserTrait;

    public function news()
    {
        return $this->hasMany(News::class);
    }

    public function coach()
    {
        return $this->hasOne(Coach::class);
    }

    public function roles()
    {
    	return $this->belongsToMany(Role::class,'role_user');
    }

    public function team()
    {
        // return $this->hasMany(Team::class);
        return $this->hasOne(Team::class);
    }
}
