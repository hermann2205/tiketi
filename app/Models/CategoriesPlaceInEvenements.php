<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriesPlaceInEvenements extends Model
{
    use HasFactory;
    protected $fillable = ['idCategoriePlaceInEvenements',
    'nbrePersonneCategoriePlace',
    'tokenPlaceInEvenement',
    'evenement_idEvenement',
    'CategPlc_idCategPlc'
];
    protected $hidden = [];


   public function Evenements()
   {
    return $this->belongsTo(Evenements::class);
   }

   public function CategoriePlace()
   {
    return $this->belongsTo(CategoriePlaces::class);
   }
}
