<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelprodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modelprods', function (Blueprint $table) {
            $table->id('idmodelprods');
            $table->string('nomModel');
            $table->text('descriptModel');
            $table->string('lienModel');
            $table->string('token_prod')->unique();
            $table->integer('event_idevent_model')->foreign('event_idevent_model')->references('idevent')->on('evenements');
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
        Schema::dropIfExists('modelprods');
    }
}
