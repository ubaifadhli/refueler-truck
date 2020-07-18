<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class SystemError extends Model
{
    protected $fillable = [
        'timestamp', 'dev_id', 'error_code', 'rcpt_no', 'met_no', 'submod_id', 'err_add', 'user_id',
    ];

    public function errorInfo() {
        return $this->embedsMany(ErrorInfo::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
