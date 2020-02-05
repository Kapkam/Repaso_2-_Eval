<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cafe extends Model
{
  protected $table = 'cafes';
  protected $fillable = [
      'name',
  ];
  public function cliente(){
    return $this->hasOne('App\Cliente');
  }
  public function locales(){
    return $this->belongsToMany('App\Starbucks');
  }
}
