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
    'categ_idcateg_place'];
    protected $hidden = [];

    public function CategoriePlaces()
    {
        return $this->belongsTo(CategoriePlaces::class);
    }
    public function Billets()
    {
        return $this->hasMany(Billets::class);
    }
}
