<?php

namespace App;

use App\Mailing;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name',
        'bedrooms',
        'from',
        'to',
        'status',
        'year',
        'address',
        'district'
    ];


    public function mailings(){
        return $this->hasMany(Mailing::class);
    }
     
}
