<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $table = 'skills';

    protected $fillable = [
        'name',
        'value',
        'show'
    ];

    public function user(){
        return $this->hasOne(User::class, 'user_id');
    }
}
