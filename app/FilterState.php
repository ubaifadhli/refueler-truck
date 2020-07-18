<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class FilterState extends Model
{
    protected $fillable = [
        'act_dp', 'dp', 'filter_satur', 'user_id',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
