<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Useress extends Model
{
    protected $fillable = [
    'firstname',
    'lastname',
    'email',
    'mobile',
    'role',
    'password',
];

}
