<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Provincia extends Model
{
 protected $table = 'provincie';
 protected $primaryKey = 'Sigla';
 protected $autoincrement = false;
 protected $keyType = 'string';
 public $timestamps = false;

}