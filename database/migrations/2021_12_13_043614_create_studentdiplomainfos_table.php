<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentdiplomainfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentdiplomainfos', function (Blueprint $table) {
            $table->id();
            $table->string('sid')->nullable();
            $table->string('dmaexamtitle')->nullable();
            $table->string('dmaconcentration')->nullable();
            $table->string('dmainstitutename')->nullable();
            $table->string('dmacgpa')->nullable();
            $table->string('dmascale')->nullable();
            $table->string('dmalettergrade')->nullable();
            $table->string('dmaroll')->nullable();
            $table->string('dmapassingyear')->nullable();
            $table->string('dmaduration')->nullable();
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
        Schema::dropIfExists('studentdiplomainfos');
    }
}
