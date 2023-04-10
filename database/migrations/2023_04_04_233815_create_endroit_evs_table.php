<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEndroitEvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('endroit_evs', function (Blueprint $table) {
            $table->id('idendroit_ev');
            $table->string('nomendroit_ev');
            $table->double('longitude_endroit_ev');
            $table->double('latitude_endroit_ev');
            $table->integer('typeEv_idTypeEv')->foreign('typeEv_idTypeEv')->references('idtypecat_ev')->on('type_events');
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
        Schema::dropIfExists('endroit_evs');
    }
}
