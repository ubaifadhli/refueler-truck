<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FilterState extends Model
{
    protected $fillable = [
        'act_dp', 'dp', 'filter_satur',
    ];
}
