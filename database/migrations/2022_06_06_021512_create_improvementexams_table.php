<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImprovementexamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('improvementexams', function (Blueprint $table) {
            $table->id();
            $table->string('student_id')->nullable();
            $table->string('student_name')->nullable();
            $table->string('dept_name')->nullable();
            $table->string('campus')->nullable();
            $table->string('current_sem')->nullable();
            $table->string('current_sem_year')->nullable();
            $table->string('student_mobile')->nullable();
            $table->string('student_email')->nullable();
            $table->string('course_name')->nullable();
            $table->string('paid_amount')->nullable();
            $table->string('paid_date')->nullable();
            $table->longText('payment_option')->nullable();
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
        Schema::dropIfExists('improvementexams');
    }
}
