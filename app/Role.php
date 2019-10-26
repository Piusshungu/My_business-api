<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    // Creating many to many realationships with Users
    public function User_roles()
    {
        return $this
            ->belongsToMany('App\User')
            ->withTimestamps();
    }
}
