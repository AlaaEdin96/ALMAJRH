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
     * 'team_id',
       
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->foreignId("team_id")->constrained("users")->cascadeOnDelete();//
            $table->foreignId("creted_by_user_id")->constrained("users")->cascadeOnDelete();//
            $table->foreignId("project_id")->constrained("projects")->cascadeOnDelete();//
            $table->string('tayp');
            $table->decimal("wallet_balance", 16, 2)->default(0);
            $table->decimal("discounts_balance", 16, 2)->default(0);
            $table->string('status')->nullable();
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
        Schema::dropIfExists('teams');
    }
};
