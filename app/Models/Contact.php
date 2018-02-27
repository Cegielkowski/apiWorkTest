<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['name', 'email', 'website', 'logo', 'password'];

    protected $hidden = ['password'];

    protected $dates = ['deleted_at'];

}
