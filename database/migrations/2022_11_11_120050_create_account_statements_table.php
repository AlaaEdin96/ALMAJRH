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
           // 1 | 300 | الي علاء | من مرعي | المدخل ادم | فاتوره | 21 | co21 |
    // 1 | 300 | الي علاء | المدخل ادم | اضافة | 21 |
    // 1 | 300 | الي علاء | المدخل ادم | خصم | 21 |
        Schema::create('account_statements', function (Blueprint $table) {
            $table->id();
            $table->string('pris');
            $table->string("to");// 
            $table->string("from_user")->nullable();// 
            $table->string('tayp');
            $table->string('code');
            $table->string("creted_by_user");//
            $table->string("project_code")->nullable();
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
        Schema::dropIfExists('account_statements');
    }
};
