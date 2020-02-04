<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cafes extends Model
{
  protected $table = 'cafes';
  protected $fillable = [
      'name',
  ];
  public function consumidor(){
    return $this->belongsTo('App\Cliente');
  }
}
