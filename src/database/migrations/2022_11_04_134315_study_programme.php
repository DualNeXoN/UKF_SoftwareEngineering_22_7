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
        Schema::create('degree', function (Blueprint $table) {
            $table->id();
            $table->string('name', 45)->nullable(false)->unique();
        });

        Schema::create('study_programme', function (Blueprint $table) {
            $table->id();
            $table->string('name', 64)->nullable(false)->unique();
            $table->string('abbreviation', 12)->nullable(false)->unique();
            $table->unsignedBigInteger('degree_id')->nullable(false);
            $table->timestamps();

            $table->foreign('degree_id')->references('id')->on('degree');
        });

        Schema::create('course', function (Blueprint $table) {
            $table->id();
            $table->string('name', 64)->nullable(false);
            $table->string('abbreviation', 12)->nullable(false)->unique();
            $table->unsignedBigInteger('study_programme_id')->nullable(false);
            $table->timestamps();

            $table->foreign('study_programme_id')->references('id')->on('study_programme');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course');
        Schema::dropIfExists('study_programme');
        Schema::dropIfExists('degree');
    }
};
