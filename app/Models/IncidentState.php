<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IncidentState extends Model
{
    protected $table = 'incidents_states'; 
    public $timestamps = false;
    use HasFactory;
}
