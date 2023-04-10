<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategEvents extends Model
{
    use HasFactory;
    protected $fillable = ['idcateg_ev','nom_categ_ev','descript_categ_ev','photo_categ_ev','theme_categ_ev','token_cat','level_categ_ev'];
    protected $hidden = [];


    public function TypeEvents()
    {
        return $this->hasMany(TypeEvents::class);
    }

    // autres classes classique
}


