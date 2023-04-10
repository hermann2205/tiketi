<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComptesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comptes', function (Blueprint $table) {
            $table->id('idcompte');
            $table->string('login');
            $table->string('pwd');
            $table->string('email')->unique();
            $table->string('telcompte');
            $table->string('tokencompte', 128)->unique();
            $table->boolean('is_connected')->default(0);
            $table->boolean('is_valid')->default(0);
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
        Schema::dropIfExists('comptes');
    }
}
