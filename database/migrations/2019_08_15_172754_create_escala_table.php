<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEscalaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('escala', function (Blueprint $table) {
            $table->bigIncrements('id'); // Primary key
            $table->timestamps();

            // Adding new fields into the table escala.
            $table->string('user');
            $table->string('email');
            $table->string('company');
            $table->string('escalas');
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('escala');
    }
}
