<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billets extends Model
{
    use HasFactory;

    protected $fillable = ["idBillet",'nomBillet','tokenBillet','place_idPlace','is_scanned','modelbilletb_idModelbillet'];
    protected $hidden = [];

    public function Modelprod()
    {
        return $this->belongsTo(Modelprod::class);
    }

    public function Places()
    {
        return $this->belongsTo(Places::class);
    }
    public function ModelBillet()
    {
        return $this->belongsTo(ModelBillets::class);
    }
}

