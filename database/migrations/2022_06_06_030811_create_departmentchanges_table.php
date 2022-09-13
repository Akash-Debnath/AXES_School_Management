<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentchangesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departmentchanges', function (Blueprint $table) {
            $table->id();
            $table->string('student_id')->nullable();
            $table->string('student_name')->nullable();
            $table->string('campus')->nullable();
            $table->string('current_sem')->nullable();
            $table->string('current_sem_year')->nullable();
            $table->string('student_mobile')->nullable();
            $table->string('student_email')->nullable();
            $table->string('present_dept')->nullable();
            $table->string('to_be_dept')->nullable();
            $table->string('apply_reason')->nullable();
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
        Schema::dropIfExists('departmentchanges');
    }
}
