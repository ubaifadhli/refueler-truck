<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;
use App\Airport;

class Unit extends Model
{
  protected $collection = 'units';

  protected $fillable = [
      'name', 'airport_id'
  ];

  public function getAirportName() {
      $airport = Airport::find($this->airport_id);
      return $airport->name;
  }

  public function getStatus() {
    // 201122 Todo

    return 'Off';
  }

  public function getInterlockStatus() {
    // 201122 Todo

    return 'Off';
  }

  public function getTotalTransaction() {
    // 201122 Todo

    return '100';
  }

  public function getTotalVolume() {
    // 201122 Todo

    return '1000';
  }
}
