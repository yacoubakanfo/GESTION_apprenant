<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApprenantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apprenants', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tuteurs_id')->unsigned();
            $table->string('nom');
            $table->string('prenom');
            $table->date('age');
            $table->string('genre');
            $table->string('ville');
            $table->string('etablissement');
            $table->string('formation');
            $table->integer('telephone');
            $table->string('email');
            $table->text('photo')->nullable();
           
            $table->foreign('tuteurs_id')->references('id')
            ->on('tuteurs')
            ->onDelete('cascade')
            ->onUpdate('cascade');

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
        Schema::dropIfExists('apprenants');
    }
}
