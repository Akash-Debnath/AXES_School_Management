<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentadmitCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentadmit_cards', function (Blueprint $table) {
            $table->id();
            $table->string('student_id')->nullable();
            $table->string('st_department')->nullable();
            $table->string('student_name')->nullable();
            $table->string('student_email')->nullable();
            $table->string('student_mobile')->nullable();
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
        Schema::dropIfExists('studentadmit_cards');
    }
}
