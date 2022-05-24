<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    public function type()
    {
        return $this->belongsTo(DocumentsType::class, 'id_document_type');
    }

    public function project()
    {
        return $this->belongsTo(Project::class, 'id_project');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
