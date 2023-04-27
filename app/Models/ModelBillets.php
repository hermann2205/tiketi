<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelBillets extends Model
{
    use HasFactory;

    protected $fillable = ['idModelBillet',
    'nomModelBillet',
    'pictModelBillet',
    'tokenModel',
    'billet_idBillet'];
    protected $hidden = [];

   public function Billets()
   {
        return $this->belongsTo(ModelBillets::class);
   }

   public function Payements()
   {
    return $this->hasMany(Payements::class);
   }
}
