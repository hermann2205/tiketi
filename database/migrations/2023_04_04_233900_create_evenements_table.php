<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvenementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evenements', function (Blueprint $table) {
            $table->id('idevent');
            $table->string('nom_event');
            $table->text('descript_event');
            $table->integer('nbr_places');
            $table->string('token_evenem',94)->unique();
            $table->integer('organis_ev')->foreign('organis_ev')->references('idorganis')->on('organisateurs');
            $table->integer('typeEv_idtypeEv')->foreign('typeEv_idtypeEv')->references('idtypecat_ev')->on('type_events');
            $table->integer('endroitev_idEndroitEv')->foreign('endroitev_idEndroitEv')->references('idendroit_ev')->on('endroit_evs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evenements');
    }
}
