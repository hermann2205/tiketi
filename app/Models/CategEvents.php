<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategEvents extends Model
{
    use HasFactory;
    protected $fillable = ['idCategEvenements',
    'nomCategEvenements',
    'descCategEvenements',
    'pictCategEvenements',
    'tokenCategEvenements'];
    protected $hidden = [];

    public function TypeEvents()
    {
        return $this->hasMany(TypeEvents::class);
    }

    // autres classes classique
}


