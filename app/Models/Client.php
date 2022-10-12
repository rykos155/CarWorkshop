<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
        /**
      * Pola wypełniane
      *
      * @var array
      */
 
      protected $fillable = [
        'name',
        'surname',
        'pesel',
        'seriesNumber',
        'phoneNumber',
        'email',
        'home',
        'street',
        'houseNumber',
        'flatNumber',
        'zipCode',
        'commune',
        'province_id',
        'deactivate',
    ]; 

     /**
   * Pola formatowane
   *
   * @var array
   */
  protected $casts = [
  ];

  public function province() {
    return $this->belongsTo('App\Models\Province');
  }

  public function car() {
    return $this->hasMany('App\Models\Car');
  }

  public function comment() {
    return $this->hasMany('App\Models\Comment');
  }
}
