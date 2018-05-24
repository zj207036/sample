<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable = ['content'];
    //在微博Status模型中，指明一条微博只属于一个用户
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
