<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom', 
        'ordre', 
        'slug', 
        'type', 
        'contenu', 
        'website_id',
    ];

    public function website()
{
    return $this->belongsTo(Website::class);
}

public function components()
{
    return $this->hasMany(Component::class);
}
}
