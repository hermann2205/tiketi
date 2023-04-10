<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organisateurs extends Model
{
    use HasFactory;
    protected $fillable = ['idorganis','nom_organis','postnom_organis','pseudo_organis','photo_organis','descript_organis','carteid_organis','compte_idCompte_organis'];
    protected $hidden = [];

    public function Comptes()
    {
        return $this->hasOne(Comptes::class);
    }
    public function Evenements()
    {
        return $this->hasMany(Evenements::class);
    }

}

