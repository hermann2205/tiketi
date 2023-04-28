<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBilletsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billets', function (Blueprint $table) {
            $table->id("idBillet");
            $table->string('nomBillet');
            $table->string('tokenBillet',89)->unique();
            $table->boolean("is_scanned");
            $table->integer('place_idPlace')->foreign('place_idPlace')->references('idPlace')->on('places');
            $table->integer('modelbilletb_idModelbillet')->foreign('modelbilletb_idModelbillet')->references('idModelBillet')->on('model_billets');
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
        Schema::dropIfExists('billets');
    }
}
