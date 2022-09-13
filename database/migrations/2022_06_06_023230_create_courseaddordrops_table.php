<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseaddordropsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courseaddordrops', function (Blueprint $table) {
            $table->id();
            $table->string('student_id')->nullable();
            $table->string('student_name')->nullable();
            $table->string('dept_name')->nullable();
            $table->string('campus')->nullable();
            $table->string('completed_credit')->nullable();
            $table->string('current_cgpa')->nullable();
            $table->string('current_sem')->nullable();
            $table->string('current_sem_year')->nullable();
            $table->string('student_mobile')->nullable();
            $table->string('student_email')->nullable();
            $table->longText('registered_course')->nullable();
            $table->longText('add_course')->nullable();
            $table->longText('drop_course')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courseaddordrops');
    }
}
