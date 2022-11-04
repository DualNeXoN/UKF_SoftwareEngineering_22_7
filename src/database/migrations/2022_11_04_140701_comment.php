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
        Schema::create('comment', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('practice_id')->nullable(false);
            $table->unsignedBigInteger('person_id')->nullable(false);
            $table->string('message', 2048)->nullable(false);
            $table->timestamp('time')->nullable(false)->default(DB::raw('CURRENT_TIMESTAMP'));

            $table->foreign('practice_id')->references('id')->on('student_professional_practice');
            $table->foreign('person_id')->references('id')->on('person');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comment');
    }
};
