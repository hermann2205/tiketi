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
            $table->id('idOrganisateur');
            $table->string('nomOrganisateur');
            $table->string('postnomOrganisateur');
            $table->string('pseudoOrganisateur');
            $table->string('pictOrganisateur');
            $table->text('descOrganisateur');
            $table->string('tokenOrganisateur');
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
