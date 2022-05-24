<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    use HasFactory;
    /*protected $table = 'resources';

    public function provided() {
        return $this->hasMany('App\User', 'provided_by');
    }

    public function projects() {
        return $this->hasMany('App\Project', 'id_project');
    }*/

}
