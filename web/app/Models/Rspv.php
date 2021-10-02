<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rspv extends Model
{
    protected $guarded = [];

    public function rspv()
    {
        return $this->belongsTo(User::class);
    }
}
