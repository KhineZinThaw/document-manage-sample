<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentForm extends Model
{
    use HasFactory;

    protected $fillable = ['document_id', 'description'];

    public function document()
    {
        return $this->belongsTo(Document::class);
    }
}
