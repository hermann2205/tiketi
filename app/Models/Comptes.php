<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comptes extends Model
{
    use HasFactory;
    protected $fillable = ['idcompte','login','pwd','email','telcompte','tokencompte','is_connected','is_valid'];
    protected $hidden = [];

    public function Organisateurs()
    {
        return $this->hasMany(Organisateurs::class);
    }

    public function Admins()
    {
        return $this->hasMany(Admins::class);
    }
}
