<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;



    /**
      * Pola wypełniane
      *
      * @var array
      */
 
      protected $fillable = [
        'status',
    ]; 

     /**
   * Pola formatowane
   *
   * @var array
   */
  protected $casts = [
  ];

  public function order() {
    return $this->hasMany('App\Models\Order');
 }
}
