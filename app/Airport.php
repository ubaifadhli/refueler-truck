<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;
use App\Unit;

class Airport extends Model
{
    // protected $connection = 'refueler';
    protected $collection = 'airports';

    protected $fillable = [
        'name'
    ];

    public function getTotalUnit() {
      $units = Unit::where('airport_id', $this->id);

      return $units->count();
    }

    public function getTotalVolume() {
      // 201122 Todo
      return '1000';
    }
}
