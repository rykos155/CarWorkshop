<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;



        /**
      * Pola wypełniane
      *
      * @var array
      */
 
      protected $fillable = [
        'car_id',
        'status_id',
        'user_id',
        'startDate',
        'endDate',
        'description'
    ]; 

     /**
   * Pola formatowane
   *
   * @var array
   */
  protected $casts = [
  ];

  public function car() {
    return $this->belongsTo('App\Models\Car');
  }

  public function status() {
    return $this->belongsTo('App\Models\Status');
  }

  public function user() {
    return $this->belongsTo('App\Models\User');
  }

  public function estimate() {
    return $this->hasMany('App\Models\Estimate');
  }
}
