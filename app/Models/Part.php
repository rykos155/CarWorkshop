<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    use HasFactory;
        /**
      * Pola wypełniane
      *
      * @var array
      */
 
      protected $fillable = [
        'id',
        'estimate_id',
        'name',
        'category_id',
        'amount',
        'price',
        'inStock',
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

public function category() {
    return $this->belongsTo('App\Models\Category');
}
}
