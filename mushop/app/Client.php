<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;
class Client extends User
{
    protected $fillable = ['name', 'email', 'password'];

    public function setPasswordAttribute($plainPassword)
    {
        return $this->attributes['password'] = Hash::make($plainPassword);
    }
}
