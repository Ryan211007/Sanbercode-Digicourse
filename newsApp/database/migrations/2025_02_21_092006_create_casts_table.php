<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCastsTable extends Migration
{
    public function up()
    {
        Schema::create('casts', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nama pemain film
            $table->string('gender'); // Jenis kelamin (Male/Female)
            $table->integer('age'); // Umur pemain film
            $table->text('bio')->nullable(); // Biografi pemain film
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('casts');
    }
}