<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billets extends Model
{
    use HasFactory;

    protected $fillable = ["idbillet",'nombillet','descriplace','token_billet','model_idModel'];
    protected $hidden = [];

    public function Modelprod()
    {
        return $this->belongsTo(Modelprod::class);
    }
}

