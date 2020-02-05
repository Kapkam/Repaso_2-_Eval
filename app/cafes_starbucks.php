<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cafes_starbucks extends Model
{
  protected $table = 'cafes_starbucks';
  protected $fillable = [
      'cafe_id','starbucks_id'
  ];
}
