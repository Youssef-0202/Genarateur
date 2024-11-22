<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Text extends Model
{
    use HasFactory;

    protected $fillable = [
        'ordre', 
        'contenu', 
        'style', 
        'component_id',
    ];

    public function component()
{
    return $this->belongsTo(Component::class);
}
}
