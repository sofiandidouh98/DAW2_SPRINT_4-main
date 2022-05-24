<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class User extends Model implements AuthenticatableContract {

    use Authenticatable;
    use HasFactory;

    protected $guarded =[];

    protected $attributes = [
        'active' => '1',
        'id_user_type' => '1'
    ];

     public function setPasswordAttribute($password){
         $this->attributes['password'] = bcrypt($password);
     }
}
