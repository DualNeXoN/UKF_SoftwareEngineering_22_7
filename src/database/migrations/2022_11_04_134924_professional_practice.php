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
        Schema::create('professional_practice', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('company_id')->nullable(false);
            $table->string('label', 96)->nullable(false);
            $table->string('description', 4096)->nullable(true);
            $table->unsignedBigInteger('study_programme_id')->nullable(false);
            $table->timestamps();

            $table->foreign('company_id')->references('id')->on('company');
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
        Schema::dropIfExists('professional_practice');
    }
};
