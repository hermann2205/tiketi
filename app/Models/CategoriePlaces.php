<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriePlaces extends Model
{
    use HasFactory;
    protected $fillable = ['idCategoriePlaces',
    'descCategoriePlaces',
    'nomCategoriePlaces',
    'tokenCategoriePlaces',
    'categplaceinev_idCategplaceinev'];
    protected $hidden = [];

    public function CategoriesPlaceInEvenements()
    {
        return $this->belongsTo(CategoriesPlaceInEvenements::class);
    }

    public function Places()
    {
        return $this->hasMany(Places::class);
    }

}
