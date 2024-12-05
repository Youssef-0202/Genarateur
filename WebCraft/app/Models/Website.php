<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Website extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre', 
        'url', 
        'date_creation', 
        'statut_publication', 
        'theme', 
        'user_id',
    ];

    public function user()
{
    return $this->belongsTo(User::class);
}

public function template()
    {
        return $this->belongsTo(Template::class);
    }
}
