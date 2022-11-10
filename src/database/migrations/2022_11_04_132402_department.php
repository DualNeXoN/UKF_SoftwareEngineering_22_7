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
        Schema::create('department', function (Blueprint $table) {
            $table->id();
            $table->string('name', 64)->nullable(false)->unique();
            $table->timestamps();
        });

        Schema::create('department_users', function (Blueprint $table) {
            $table->unsignedBigInteger('department_id')->nullable(false);
            $table->unsignedBigInteger('user_id')->nullable(false);

            $table->foreign('department_id')->references('id')->on('department');
            $table->foreign('user_id')->references('id')->on('general_user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('department_users');
        Schema::dropIfExists('department');
    }
};
