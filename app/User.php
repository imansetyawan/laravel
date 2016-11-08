<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'users';

    protected $fillable = [
        'name', 'email', 'password', 'level',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function artikel() {
        return $this->hasMany('App\Artikel');
    }

     public function role() {
        return $this->belongsTo(Role::class, 'roles_id');
    }

    public function hasRule($nameRule){
        if($this->role->name == $nameRule){
            return true;
        }
            return false;
    }
}
