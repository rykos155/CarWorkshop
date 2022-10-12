<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    
    use HasFactory;
    /**
      * Pola wypełniane
      *
      * @var array
      */
 
      protected $fillable = [
        'estimate_id',
        'name',
        'price',
    ]; 

     /**
   * Pola formatowane
   *
   * @var array
   */
  protected $casts = [
  ];

    public function estimate() {
        return $this->belongsTo('App\Models\Estimate');
      }
}
