<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TasksState extends Model
{
    use HasFactory;

    /*when I seed the tasks_states table it shows an error because it doesn't find the 
    default created_at and updated_at columns, so I disable them*/
    public $timestamps = false;
}
