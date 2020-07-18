<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class ErrorInfo extends Model
{
    protected $fillable = [
        'value',
    ];
}
