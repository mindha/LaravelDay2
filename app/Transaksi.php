<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    private $table = 'transaksis';
    private $primaryKey = 'id';
    //foreignkey user_id, homestay_id
    private $timestamps = false;
    protected $fillable = [
      'user_id',
      'homestay_id',
      'check_in',
      'check_out',
      'total'
    ];

//has
    public function transaksi(){
      return $this->hasOne('App\Homestay');
    }
}
