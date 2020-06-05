<?php

namespace App;

use App\User;
use App\Project;
use App\Template;
use Illuminate\Database\Eloquent\Model;

class Mailing extends Model
{
    protected $fillable = [
        'client',
        'email',
        'subject',
        'user_id',
        'project_id'

  

    ];
    public function project(){
        return $this->belongsTo(Project::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
