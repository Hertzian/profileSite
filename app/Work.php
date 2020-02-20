<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $table = 'works';

    protected $fillable = [
        'name',
        'img',
        'url',
        'github',
        'show'
    ];

    public function user(){
        return $this->hasOne(User::class, 'user_id');
    }
}
