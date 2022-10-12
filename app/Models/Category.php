<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /**
      * Pola wypełniane
      *
      * @var array
      */
 
      protected $fillable = [
        'name',
    ]; 

     /**
   * Pola formatowane
   *
   * @var array
   */
  protected $casts = [
  ];

 public function part() {
  return $this->hasMany('App\Models\Part');
}
}
