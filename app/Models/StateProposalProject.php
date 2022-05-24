<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StateProposalProject extends Model
{
    protected $table = 'states_proposals_projects'; 
    public $timestamps = false;
    use HasFactory;
}
