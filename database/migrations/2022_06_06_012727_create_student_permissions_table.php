<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_permissions', function (Blueprint $table) {
            $table->id();
            $table->string('application_for')->nullable();
            $table->string('student_id')->nullable();
            $table->string('student_name')->nullable();
            $table->string('dept_name')->nullable();
            $table->string('campus')->nullable();
            $table->string('current_semester')->nullable();
            $table->string('current_sem_year')->nullable();
            $table->string('student_mobile')->nullable();
            $table->string('student_email')->nullable();
            $table->string('father_name')->nullable();
            $table->string('father_occupation')->nullable();
            $table->string('father_number')->nullable();
            $table->string('last_paid_amou')->nullable();
            $table->string('current_due')->nullable();
            $table->string('pay_within')->nullable();
            $table->string('apply_reason')->nullable();
            $table->string('member_image')->nullable();
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
        Schema::dropIfExists('student_permissions');
    }
}
