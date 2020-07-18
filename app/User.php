<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Jenssegers\Mongodb\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function systemErrors() {
        return $this->hasMany(SystemError::class);
    }

    public function filterStates() {
        return $this->hasMany(FilterState::class);
    }

    public function meterStates() {
        return $this->hasMany(MeterState::class);
    }

    public function warnings() {
        return $this->hasMany(Warning::class);
    }

    public function transfers() {
        return $this->hasMany(Transfer::class);
    }
}
