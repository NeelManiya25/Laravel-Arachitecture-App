<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin_user_data extends Authenticatable
{
    use HasFactory;
 
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'mobile',
        'role',
        'password'
    ];

}