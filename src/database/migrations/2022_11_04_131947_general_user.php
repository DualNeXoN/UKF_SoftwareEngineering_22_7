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
        Schema::create('general_user', function (Blueprint $table) {
            $table->id();
            $table->string('uid', 16)->nullable(false)->unique();
            $table->string('password', 128)->nullable(false);
            $table->unsignedBigInteger('role_id')->nullable(false);
            $table->timestamps();

            $table->foreign('role_id')->references('id')->on('role');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('general_user');
    }
};
