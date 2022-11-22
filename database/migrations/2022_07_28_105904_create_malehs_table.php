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
        Schema::create('malehs', function (Blueprint $table) {
            $table->id();
            $table->foreignId("tem_id")->constrained("teams")->cascadeOnDelete();//  
            $table->foreignId("creted_by_user_id")->constrained("users")->cascadeOnDelete();//
            $table->decimal("mony", 16, 2)->default(0);
             $table->timestamps();
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
        Schema::dropIfExists('malehs');
    }
};
