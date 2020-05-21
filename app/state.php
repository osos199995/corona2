<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class state extends Model
{
  protected $fillable=[
      'user_name',
      'state',
      'count',
  ];
}
