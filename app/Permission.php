<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
  private $table = 'permissions';
  private $primaryKey = 'id';
  protected $fillable = [
    'role_id',
    'permissions'
  ];

  function user(){
    return $this->
  }

  function role(){

  }
}
