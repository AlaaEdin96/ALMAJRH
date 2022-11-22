<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Work extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('works', function (Blueprint $table) {
            $table->id();
            $table->foreignId("creted_by_user_id")->constrained("users")->cascadeOnDelete();//
            $table->foreignId("project_id")->constrained("projects")->cascadeOnDelete();//
            $table->string('lociton');
            $table->longText('imag');
            $table->dateTime ('work_end');
            $table->integer('status')->default('0');//0 1 2
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
        Schema::dropIfExists('works');
    }
}
