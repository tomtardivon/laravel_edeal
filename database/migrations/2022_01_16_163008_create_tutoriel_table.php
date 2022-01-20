<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTutorielTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutoriels', function (Blueprint $table) {
            $table->id();
            $table->string('nom_tuto');
            $table->string('description_tuto');
            $table->string('tag_tuto');
            $table->string('auteur_tuto');
            $table->string(' notation_tuto');
            $table->string('difficulte_tuto');
            $table->string('duree_tuto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tutoriels');
    }
}
