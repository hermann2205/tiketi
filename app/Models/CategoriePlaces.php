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
    'tokenCategoriePlaces'];
    protected $hidden = [];

    public function CategoriesPlaceInEvenements()
    {
        return $this->hasMany(CategoriesPlaceInEvenements::class);
    }

}
