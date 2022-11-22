<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tasks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('taitl');
            $table->integer('order')->default('0')->nullable();
            $table->foreignId("user_id")->constrained("users")->cascadeOnDelete();
            $table->foreignId("project_id")->constrained("projects")->cascadeOnDelete();
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
        Schema::dropIfExists('tasks');

    }
}
