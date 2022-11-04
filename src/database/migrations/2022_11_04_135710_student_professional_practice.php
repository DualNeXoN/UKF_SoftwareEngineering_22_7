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
        Schema::create('student_professional_practice', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id')->nullable(false);
            $table->unsignedBigInteger('professional_practice_id')->nullable(false);
            $table->unsignedBigInteger('contract_type_id')->nullable(false);
            $table->unsignedBigInteger('academic_year_id')->nullable(false);
            $table->unsignedBigInteger('practice_state_id')->nullable(false);
            $table->string('grade', 2)->nullable(true);
            $table->string('student_feedback', 4096)->nullable(true);
            $table->string('company_feedback', 4096)->nullable(true);
            $table->tinyInteger('archived')->nullable(false)->default(0);
            $table->timestamps();

            $table->foreign('student_id')->references('id')->on('person');
            $table->foreign('professional_practice_id')->references('id')->on('professional_practice');
            $table->foreign('contract_type_id')->references('id')->on('contract_type');
            $table->foreign('academic_year_id')->references('id')->on('academic_year');
            $table->foreign('practice_state_id')->references('id')->on('practice_state');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_professional_practice');
    }
};
