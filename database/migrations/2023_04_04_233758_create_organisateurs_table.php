<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganisateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organisateurs', function (Blueprint $table) {
            $table->id('idorganis');
            $table->string('nom_organis');
            $table->string('postnom_organis');
            $table->string('pseudo_organis');
            $table->string('photo_organis');
            $table->text('descript_organis');
            $table->string('carteid_organis');
            $table->Integer('compte_idCompte_organis')->foreign('compte_idCompte_organis')->references('idcompte')->on('comptes');
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
        Schema::dropIfExists('organisateurs');
    }
}
