<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $fillable = [
        'contenu', 
        'champs', 
        'style', 
        'component_id',
    ];

    public function component()
{
    return $this->belongsTo(Component::class);
}
}
