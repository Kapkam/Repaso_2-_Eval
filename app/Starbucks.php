<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Starbucks extends Model
{
  protected $table = 'starbucks';
  protected $fillable = [
      'name', 'direccion',
  ];
}
