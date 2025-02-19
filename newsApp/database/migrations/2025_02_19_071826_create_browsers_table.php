<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrowsersTable extends Migration
{
    public function up()
    {
        Schema::create('browsers', function (Blueprint $table) {
            $table->id();
            $table->string('rendering_engine');
            $table->string('browser');
            $table->string('platform');
            $table->string('engine_version');
            $table->string('css_grade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('browsers');
    }
}