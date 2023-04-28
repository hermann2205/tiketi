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
    'tokenModel'];
    protected $hidden = [];

   public function Billets()
   {
        return $this->hasMany(ModelBillets::class);
   }
   public function Payements()
   {
    return $this->hasMany(Payements::class);
   }
}
