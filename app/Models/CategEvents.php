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
    'tokenCategEvenements',
    'modecateg'];
    protected $hidden = [];

    public function TypeEvents()
    {
        return $this->hasMany(TypeEvents::class);
    }

    // autres classes classique

    public function getAllCategEvent()
    {
        return CategEvents::get();
    }
    public function getAllNbCategEvent()
    {
        return CategEvents::where("modecateg","non-payant")->get();
    }
    public function getAllBCategEvent()
    {
        return CategEvents::where("modecateg","payant")->get();
    }



}


