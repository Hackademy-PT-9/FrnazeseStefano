<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'anno_pubblicazione', 'numero_pagine','image'];
    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
