<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class RegisterUser extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'register_user_table';

    protected $fillable = [
        'name', 'dob', 'email', 'phone', 'password', 'role'
    ];

    protected $hidden = ['password'];

    protected $casts = [
            'password'  => 'hashed',
    ];
}


?>