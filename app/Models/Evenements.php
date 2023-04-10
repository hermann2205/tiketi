<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evenements extends Model
{
    use HasFactory;
    protected $fillable = ['idevent','nom_event','descript_event','nbr_places','token_evenem','typeEv_idtypeEv','endroitev_idEndroitEv'];
    protected $hidden = [];

    public function TypeEvents()
    {
        return $this->hasOne(TypeEvents::class);
    }
    public function EndroitEv()
    {
        return $this->hasMany(EndroitEv::class);
    }
    public function Modelprod()
    {
        return $this->hasMany(Modelprod::class);
    }
    public function Payements()
    {
        return $this->hasMany(Payements::class);
    }
    public function Organisateurs()
    {
        return $this->belongsTo(Organisateurs::class);
    }
    // autres classes classiques
}
