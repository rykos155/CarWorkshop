<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;



    /**
      * Pola wypełniane
      *
      * @var array
      */
 
      protected $fillable = [
        'provinceName',
    ]; 

     /**
   * Pola formatowane
   *
   * @var array
   */
  protected $casts = [
  ];

  public function client() {
    return $this->hasMany('App\Models\Client');
 }
}
