<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('task_name');
            $table->integer('progress')->nullable();
            $table->string('label')->nullable();
            $table->unsignedBigInteger('user_id')->nullable(); 
            $table->unsignedBigInteger('project_id')->nullable(); 
            $table->unsignedBigInteger('category_id')->nullable(); 
            $table->unsignedBigInteger('browser_id')->nullable(); 
            $table->timestamps();
        
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('set null');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');
            $table->foreign('browser_id')->references('id')->on('browsers')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}   