<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evenements extends Model
{
    use HasFactory;
    protected $fillable = ['idEvenement',
    'nomidEvenement',
    'descidEvenement',
    'nbrplaceidEvenement',
    'tokenidEvenement',
    'heureDebutEvenement',
    'organis_ev',
    'categ_idcateg_ev'];
    protected $hidden = [];



    public function Organisateurs()
    {
        return $this->belongsTo(Organisateurs::class);
    }
    public function CategEvents()
    {
        return $this->belongsTo(CategEvents::class);
    }
    public function CategoriePlaceInEvenements()
    {
        return $this->hasMany(CategoriePlaceInEvenements::class);
    }


    // autres classes classiques
}
