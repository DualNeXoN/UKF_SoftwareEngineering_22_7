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
        Schema::create('person', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('general_user_id')->nullable(false);
            $table->string('name', 45)->nullable(false);
            $table->string('surname', 45)->nullable(false);
            $table->date('birth_date')->nullable(true);
            $table->unsignedBigInteger('address_id')->nullable(true);

            $table->foreign('general_user_id')->references('id')->on('general_user');
            $table->foreign('address_id')->references('id')->on('address');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('person');
    }
};
