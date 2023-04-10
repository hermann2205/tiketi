<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelprod extends Model
{
    use HasFactory;
    protected $fillable = ['idmodelprods','nomModel','descriptModel','lienModel','token_prod','event_idevent_model'];
    protected $hidden = [];

    public function Evenements()
    {
        return $this->hasMany(Evenements::class);
    }
    public function Billets()
    {
        return $this->hasMany(Billets::class);
    }



}
