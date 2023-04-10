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
            $table->id('idcateg_ev');
            $table->string('nom_categ_ev');
            $table->text('descript_categ_ev');
            $table->string('photo_categ_ev');
            $table->string('theme_categ_ev');
            $table->string('token_cat',79)->unique();
            $table->integer('level_categ_ev');
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
