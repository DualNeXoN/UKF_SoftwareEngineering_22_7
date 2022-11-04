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
        Schema::create('country', function (Blueprint $table) {
            $table->id();
            $table->string('name', 64)->nullable(false)->unique();
            $table->timestamps();
        });

        Schema::create('town', function (Blueprint $table) {
            $table->id();
            $table->string('name', 96)->nullable(false);
            $table->unsignedBigInteger('country_id')->nullable(false);
            $table->timestamps();

            $table->foreign('country_id')->references('id')->on('country');
        });

        Schema::create('address', function (Blueprint $table) {
            $table->id();
            $table->string('number', 20)->nullable(false);
            $table->string('street', 96)->nullable(true);
            $table->string('postcode', 10)->nullable(false);
            $table->unsignedBigInteger('town_id')->nullable(false);
            $table->timestamps();

            $table->foreign('town_id')->references('id')->on('town');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('address');
        Schema::dropIfExists('town');
        Schema::dropIfExists('country');
    }
};
