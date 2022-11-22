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
            $table->foreignId("tem_id")->constrained("teams")->cascadeOnDelete();//  
            $table->string("taitel")->nullable();
            $table->foreignId("task_id")->constrained("tasks");//
            $table->decimal("mony", 16, 2)->default(0);
            $table->foreignId("sponser_id")->nullable()->constrained("teams");//
            $table->timestamps();
            $table->foreignId("creted_by_user_id")->constrained("users")->cascadeOnDelete();//
            $table->foreignId("check_user_id")->nullable()->constrained("users")->cascadeOnDelete();//
            $table->string("description")->nullable();

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
