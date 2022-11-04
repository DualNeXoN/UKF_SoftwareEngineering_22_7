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
        Schema::create('company', function (Blueprint $table) {
            $table->id();
            $table->string('name', 96)->nullable(false);
            $table->unsignedBigInteger('address_id')->nullable(false);
            $table->unsignedBigInteger('contact_person_id')->nullable(false);

            $table->foreign('address_id')->references('id')->on('address');
            $table->foreign('contact_person_id')->references('id')->on('person');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company');
    }
};
