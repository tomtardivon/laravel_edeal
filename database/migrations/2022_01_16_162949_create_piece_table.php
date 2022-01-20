<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePieceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pieces', function (Blueprint $table) {
            $table->id();
            $table->string('nom_piece');
            $table->string('description_piece');
            $table->string('image_piece')->default(Storage::url('Images/piéces/illustration/default.jpg'));
            $table->string('modele3D')->default(Storage::url('Images/piéces/modele3D/default.jpg'));
            $table->string('modele2D')->default(Storage::url('Images/piéces/modele2D/default.jpg'));            
            $table->string('type_piece')->default('default');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pieces');
    }
}
