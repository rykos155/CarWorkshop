<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carmodel extends Model
{
    use HasFactory;

    /**
      * Pola wypełniane
      *
      * @var array
      */
 
      protected $fillable = [
        'model',
        'brand_id',
    ]; 

     /**
   * Pola formatowane
   *
   * @var array
   */
  protected $casts = [
  ];

  public function brand() {
    return $this->belongsTo('App\Models\Brand');
}

public function car() {
  return $this->hasMany('App\Models\Car');
}
}
