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
            $table->id('idEvenement');
            $table->string('nomidEvenement');
            $table->text('descidEvenement');
            $table->integer('nbrplaceidEvenement');
            $table->string('tokenidEvenement',94)->unique();
            $table->dateTime("heureDebutEvenement");
            $table->integer('organis_ev')->foreign('organis_ev')->references('idOrganisateur')->on('organisateurs');
            $table->integer('categ_idcateg_ev')->foreign('categ_idcateg_ev')->references('idCategEvenements')->on('categ_events');
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
