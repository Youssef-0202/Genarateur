<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Component extends Model
{
    use HasFactory;

    protected $fillable = [
        'ordre', 
        'type', 
        'contenu', 
        'style', 
        'page_id',
    ];

    public function page()
{
    return $this->belongsTo(Page::class);
}

public function text()
{
    return $this->hasOne(Text::class);
}

public function image()
{
    return $this->hasOne(Image::class);
}

public function form()
{
    return $this->hasOne(Form::class);
}

}
