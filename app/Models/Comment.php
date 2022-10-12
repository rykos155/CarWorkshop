<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    /**
      * Pola wypełniane
      *
      * @var array
      */
 
      protected $fillable = [
        'client_id',
        'text'
    ]; 

     /**
   * Pola formatowane
   *
   * @var array
   */
  protected $casts = [
  ];

    public function client() {
        return $this->belongsTo('App\Models\Client');
    }
}