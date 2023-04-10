<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admins extends Model
{
    use HasFactory;
    protected $fillable = ['idadmin','nomadmin','pseudoadmin','pictadmin','compte_idCompte'];
    protected $hidden = [];

    public function Comptes()
    {
        return $this->belongsTo(Comptes::class);
    }
    // les autres classes classiques.


}



