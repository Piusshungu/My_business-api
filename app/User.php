<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Emadadly\LaravelUuid\Uuids;
use App\Roles;

class User extends Authenticatable
{
    use Notifiable;
    use Uuids;
    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'location', 'phone_number', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

// Creating many to many realationships with Roles
    public function Roles(){
        return $this
        ->belongsToMany('App\Roles')
        ->withTimestamps();

    }
    public function authorizeRoles($roles){
        if($this->hasAnyrole($roles)){
            return true;
        }
        abort(404, 'This action is Unauthorized');
    }
    public function hasAnyRole($roles){
        if(is_array($roles)){
            foreach($roles as $role){
                if($this->hasRole($role)){
                    return true;
                }
            }
        }   
        else{
            if($this->hasRole($roles)){
                return true;
            }
        }
        return false;
    }
    public function hasRole($role){
        if($this->role()->where('name', $role)->first()){
            return true;
        }
        return false;

    }
}
