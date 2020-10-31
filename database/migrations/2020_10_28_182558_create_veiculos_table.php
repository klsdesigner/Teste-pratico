<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVeiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veiculos', function (Blueprint $table) {

            $table->increments('id');
            $table->string('placa', 7);
            $table->string('renevam', 9);
            $table->string('modelo');
            $table->string('marca');
            $table->year('ano');
            $table->integer('proprietario')->unsigned();
            $table->timestamps();            

            $table->foreign('proprietario')
                ->references('id')->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('veiculos');
    }
}
