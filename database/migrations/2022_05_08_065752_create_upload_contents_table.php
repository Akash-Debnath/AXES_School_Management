<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUploadContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upload_contents', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nulable();
            $table->string('type')->nulable();
            $table->string('available_for')->nulable();
            $table->string('all_student')->nulable();
            $table->integer('class_id')->nulable();
            $table->integer('section_id')->nulable();
            $table->integer('dept_id')->nulable();
            $table->integer('batch_id')->nulable();
            $table->integer('program_id')->nulable();
            $table->text('description')->nulable();
            $table->string('content')->nulable();
            $table->date('date')->nulable();
            $table->string('added_by')->nulable();
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
        Schema::dropIfExists('upload_contents');
    }
}
