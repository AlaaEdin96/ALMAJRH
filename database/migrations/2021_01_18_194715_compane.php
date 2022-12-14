<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Compane extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('companes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('logo')->nullable();
            $table->foreignId("user_id")->constrained("users")->cascadeOnDelete();
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
        Schema::dropIfExists('companes');
    }
}
