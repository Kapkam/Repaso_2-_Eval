<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cafes extends Model
{
  protected $table = 'cafes';
  protected $fillable = [
      'name',
  ];
}
