<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisterslipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registerslips', function (Blueprint $table) {
            $table->id();
            $table->string('student_id')->nullable();
            $table->string('dept')->nullable();
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
        Schema::dropIfExists('registerslips');
    }
}
