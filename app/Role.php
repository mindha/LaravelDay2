<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    private $table = 'role';
    private $primaryKey = 'id';
    private $timestamps = false;
    protected $fillable = [
      // $table->increments('id');
      // $table->string('role');
      'role'
    ];

    function user(){
    return $this->hasMany('App\User', 'user_id');
    }

    function permission(){
      return $this->hasManyThrough('App\Permission');
    }
}
