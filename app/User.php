<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     *  nombre : item.nombre,


     * @var array
     */
    protected $fillable = [
        'name',
        'first_surname',
        'last_surname',
        'email',
        'phone',
        'password',
        'charge_id',
        'avatar',
        'rol_id'

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

    public function charge(){
        return $this->belongsTo(Charge::class);
    }
    public function rol(){
        return $this->belongsTo(Role::class);
    }
}
