<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saldo extends Model
{
    private $primaryKey = 'id';
    private $timestamps = false;
    protected $fillable = [
      'user_id',
      'saldo'
    ];

    function saldo(){
      return $this->belongsTo('App\User');
    }
}
