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
        Schema::create('role', function (Blueprint $table) {
            $table->id();
            $table->string('name', 45)->nullable(false)->unique();
        });

        Schema::create('permission', function (Blueprint $table) {
            $table->string('value', 64)->nullable(false)->unique();

            $table->primary('value');
        });

        Schema::create('role_has_permission', function (Blueprint $table) {
            $table->unsignedBigInteger('role_id')->nullable(false);
            $table->string('permission_value', 64)->nullable(false);

            $table->foreign('role_id')->references('id')->on('role');
            $table->foreign('permission_value')->references('value')->on('permission');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role_has_permission');
        Schema::dropIfExists('permission');
        Schema::dropIfExists('role');
    }
};
