<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('fatorhs', function (Blueprint $table) {
            $table->id();
            $table->foreignId("tem_id")->constrained("users")->cascadeOnDelete();//  
            $table->foreignId("creted_by_user_id")->constrained("users")->cascadeOnDelete();//
            $table->string("mony");
            $table->string("taitel")->nullable();
            $table->foreignId("task_id")->constrained("tasks");//
            $table->foreignId("sponser_id")->nullable()->constrained("teams");//
            $table->foreignId("check_user_id")->nullable()->constrained("users")->cascadeOnDelete();//

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
        Schema::dropIfExists('fatorhs');
    }
};
