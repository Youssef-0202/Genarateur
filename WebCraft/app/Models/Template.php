<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Template extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom', 'description', 'image', 'path'
    ];


    public function components()
    {
        return $this->belongsToMany(Component::class, 'gestionnaire_de_contenu')
                    ->withPivot('nom', 'ordre', 'slug', 'type', 'contenu')
                    ->withTimestamps();
    }

    public function websites()
    {
        return $this->hasMany(Website::class);
    }

}
