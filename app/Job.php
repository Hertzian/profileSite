<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'Jobs';

    protected $fillable = [
        'name', 'assignment'
    ];

    public function user(){
        return $this->hasOne(User::class, 'user_id');
    }
}
