<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'jobs';

    protected $fillable = [
        'company',
        'job',
        'year',
        'assignment',
        'show'
    ];

    public function user(){
        return $this->hasOne(User::class, 'user_id');
    }
}
