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
        Schema::create('contact', function (Blueprint $table) {
            $table->id();
            $table->string('label', 24)->nullable(false)->unique();
        });

        Schema::create('person_has_contact', function (Blueprint $table) {
            $table->unsignedBigInteger('person_id')->nullable(false);
            $table->unsignedBigInteger('contact_id')->nullable(false);
            $table->string('value', 64)->nullable(false);

            $table->foreign('person_id')->references('id')->on('person');
            $table->foreign('contact_id')->references('id')->on('contact');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('person_has_contact');
        Schema::dropIfExists('contact');
    }
};
