<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class MeterState extends Model
{
    protected $fillable = [
        'del_path', 'volume', 'flowrate', 'state', 'user_id',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
