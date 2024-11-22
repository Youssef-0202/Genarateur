<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Css extends Model
{
    use HasFactory;

    protected $fillable = [
        'regles_css', 
        'template_id',
    ];

    public function template()
{
    return $this->belongsTo(Template::class);
}
}
