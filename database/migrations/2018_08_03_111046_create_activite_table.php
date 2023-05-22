<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActiviteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('activites', function (Blueprint $table) {
            $table->increments('id_activite');
            $table->string('titre');
            $table->string('category');
            $table->text('description');
            $table->integer('prix');
            $table->string('imgUrl');
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
         Schema::drop('activites');
    }
}
