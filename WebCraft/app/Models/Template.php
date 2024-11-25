<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Template extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom', 'description','image','path'
    ];

    public function website()
{
    return $this->belongsTo(Website::class);
}

public function structure()
{
    return $this->hasOne(Structure::class);
}

public function css()
{
    return $this->hasOne(Css::class);
}


}
