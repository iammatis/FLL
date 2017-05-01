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

    public function roles()
    {
    	return $this->belongsToMany(Role::class,'role_user');
    }
}
