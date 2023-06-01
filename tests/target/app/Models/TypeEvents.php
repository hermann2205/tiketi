<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeEvents extends Model
{
    use HasFactory;
    protected $fillable = ['idtypecat_ev','nomtypecat_ev','descriptypecat_ev','token_typ','categ_idcateg_ev'];
    protected $hidden = [];

    public function CategEvents()
    {
        return  $this->belongsTo(CategEvents::class);
    }

    public function EndroitEvs()
    {
        return $this->hasMany(EndroitEvs::class);
    }
}


/*

     $table->id();
            $table->string();
            $table->text();
            $table->string();
            $table->integer()->foreign('categ_idcateg_ev')->references('idcateg_ev')->on('categ_events');
            $table->timestamps();

*/

