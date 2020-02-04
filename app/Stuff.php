<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stuff extends Model
{
  protected $table = 'stuff';
  protected $fillable = [
      'name', 'apellido', 'email', 'password',
  ];
}
