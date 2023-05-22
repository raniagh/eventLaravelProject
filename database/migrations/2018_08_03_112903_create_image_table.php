<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('images', function (Blueprint $table) {
            $table->increments('id_image');
            $table->string('titre');
            $table->string('nom_fichier')->nullable();
            $table->integer('id_activite')->unsigned();
            $table->foreign('id_activite')->references('id_activite')->on('activites')->onDelete('cascade');
            
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
        Schema::drop('images');
    }
}
