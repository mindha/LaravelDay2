<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Homestay extends Model
{
    protected $table = 'homestays';
    protected $primaryKey = 'id';
    public $timestamps = 'false';
    protected $fillable = [
      'name_homestay',
      'address',
      'desc'
    ];

// belongsTo

    public function homestay(){
      return $this->belongsTo('App\Transaksi', 'homestay_id');
    }
}
