<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    /**
      * Pola wypełniane
      *
      * @var array
      */
 
      protected $fillable = [
        'car_id',
        'name',
        'file_path',
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

}
