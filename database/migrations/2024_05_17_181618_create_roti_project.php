<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRotiProject extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roti', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama', 255);
            $table->string('rasa', 255);
            $table->decimal('harga', 10, 2);
            $table->integer('stok');
            $table->string('foto');
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
        Schema::dropIfExists('roti');
    }
}
