<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{

    use Notifiable, HasRoles;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password','email', 'location','Ip_address', 'phone_num','pirth_day', 'id_nashioty','gender', 'Status', 'nashioty', 'created_at','updated_at', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function setPasswordAttribute($value)
    {
      if ($value) {
        $this->attributes['password'] = app('hash')->needsRehash($value)?Hash::make($value):$value;
      }
    }


    public function propertys()
    {
        return $this->hasMany('App\Property');
    }

    public function favorites()
    {
        return $this->hasMany('App\Favorite');
    }
    public function comments()
    {
        return $this->hasMany('App\Comment','user_id');
    }

    public function rating()
    {
        return $this->hasMany('App\Rating', 'user_id');
    }

}
