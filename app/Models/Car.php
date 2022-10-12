<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    /**
      * Pola wypełniane
      *
      * @var array
      */
 
      protected $fillable = [
        'client_id',
        'brand_id',
        'model_id',
        'generation',
        'productionYear',
        'registrationNumber',
        'VIN',
        'color',
        'type',
        'engineType',
        'engineCapacity',
        'enginePower',
        'mileage',
    ]; 

     /**
   * Pola formatowane
   *
   * @var array
   */
  protected $casts = [
  ];

  public function client() {
    return $this->belongsTo('App\Models\Client');
  }

  public function brand() {
    return $this->belongsTo('App\Models\Brand');
  }

  public function carmodel() {
    return $this->belongsTo('App\Models\Carmodel','model_id');
  }

  public function order() {
    return $this->hasMany('App\Models\Order');
 }

 public function file() {
  return $this->hasMany('App\Models\File');
}
}
