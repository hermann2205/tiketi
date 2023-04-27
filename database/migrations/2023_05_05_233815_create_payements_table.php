<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePayementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payements', function (Blueprint $table) {
            $table->id('idpayement');
            $table->double('montantpayement');
            $table->dateTime('datepayement');
            $table->string('modePayement');
            $table->integer('modelbillet_idModelbillet')->foreign('modelbillet_idModelbillet')->references('idModelBillet')->on('model_billets');
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
        Schema::dropIfExists('payements');
    }
}
