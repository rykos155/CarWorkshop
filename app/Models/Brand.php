<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;



    /**
      * Pola wypełniane
      *
      * @var array
      */
 
      protected $fillable = [
        'brand',
    ]; 

     /**
   * Pola formatowane
   *
   * @var array
   */
  protected $casts = [
  ];

  public function carmodel() {
    return $this->hasMany('App\Models\Carmodel');
 }

 public function car() {
  return $this->hasMany('App\Models\Car');
}
}
