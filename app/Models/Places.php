<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Places extends Model
{
    use HasFactory;
    protected $fillable = ['idPlace',
    'descPlace',
    'is_free',
    'tokenPlace',
    'categplaceinev_idCategplaceinev'];
    protected $hidden = [];

    public function CategoriePlaceInEvenement()
    {
        return $this->belongsTo(CategoriePlaceInEvenement::class);
    }
    public function Billets()
    {
        return $this->hasMany(Billets::class);
    }
}
