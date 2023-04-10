<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EndroitEv extends Model
{
    use HasFactory;
    protected $fillable = ['idendroit_ev','nomendroit_ev','longitude_endroit_ev','latitude_endroit_ev','typeEv_idTypeEv'];
    protected $hidden = [];

    public function TypeEvents()
    {
       return $this->hasMany(TypeEvents::class);
    }

    public function Evenements()
    {
        return $this->hasMany(Evenements::class);
    }
    // autres classes classiques
}


