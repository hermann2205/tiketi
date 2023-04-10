<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payements extends Model
{
    use HasFactory;
    protected $fillable = ['idpayement','montantpayement','tokenpayement','devise','event_idevent_payement'];
    protected $hidden = [];

    public function Evenements()
    {
        return $this->belongsTo(Evenements::class);
    }

}

