<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelprod extends Model
{
    use HasFactory;
    protected $fillable = ['idmodelprods','nomModel','descriptModel','lienModel','token_prod'];
    protected $hidden = [];
    public function Billets()
    {
        return $this->hasMany(Billets::class);
    }
}
