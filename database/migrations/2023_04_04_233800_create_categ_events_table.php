<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categ_events', function (Blueprint $table) {
            $table->id('idCategEvenements');
            $table->string('nomCategEvenements');
            $table->text('descCategEvenements');
            $table->string('pictCategEvenements');
            $table->string('tokenCategEvenements',79)->unique();
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
        Schema::dropIfExists('categ_events');
    }
}
