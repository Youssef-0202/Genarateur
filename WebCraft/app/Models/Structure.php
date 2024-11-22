<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Structure extends Model
{   
    use HasFactory;

    protected $fillable = [
        'contenu', 
        'template_id',
    ];

    public function template()
{
    return $this->belongsTo(Template::class);
}
}
