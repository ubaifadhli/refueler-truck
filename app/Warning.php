<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Warning extends Model
{
    protected $fillable = [
        'value', 'user_id',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
