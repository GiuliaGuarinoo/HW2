<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
 protected $primaryKey = 'username';
 protected $autoincrement = false;
 protected $keyType = 'string';
public $timestamps = false;

}
