<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payements extends Model
{
    use HasFactory;
    protected $fillable = ['idpayement','montantpayement','datepayement','modePayement','modelbillet_idModelbillet'];
    protected $hidden = [];

   public function ModelBillets()
   {
        return $this->belongsTo(ModelBillets::class);
   }

}

