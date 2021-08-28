<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;
use PhpParser\Builder\Class_;

class Login extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;




    
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

}



/**protected $table = '_login';
    protected $primarykey = 'id';

    protected $fillable =[
        'usuario', 'contraseña', 'base_de_datos', 'ip', 'puerto'    
    ];
    
    use HasApiTokens, HasFactory, Notifiable; */