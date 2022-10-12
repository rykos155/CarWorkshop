<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estimate extends Model
{
    use HasFactory;



    /**
      * Pola wypełniane
      *
      * @var array
      */
 
      protected $fillable = [
        'order_id',
        'user_id',
        'isSend',
    ]; 

     /**
   * Pola formatowane
   *
   * @var array
   */
  protected $casts = [
  ];

public function part() {
  return $this->hasMany('App\Models\Part', 'estimate_id');
}

public function service() {
  return $this->hasMany('App\Models\Service');
}
  
public function order() {
  return $this->belongsTo('App\Models\Order');
}

public function user() {
  return $this->belongsTo('App\Models\User');
}
}
