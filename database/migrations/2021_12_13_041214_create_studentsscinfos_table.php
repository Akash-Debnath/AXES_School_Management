<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsscinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentsscinfos', function (Blueprint $table) {
            $table->id();
            $table->string('sid')->nullable();
            $table->string('SSC_exam')->nullable();
            $table->string('SSC_subject')->nullable();
            $table->string('sscinstitutename')->nullable();
            $table->string('sscboard')->nullable();
            $table->string('ssclettergrade')->nullable();
            $table->string('sscgpa')->nullable();
            $table->string('sscgpa4subject')->nullable();
            $table->string('sscscale')->nullable();
            $table->string('sscroll')->nullable();
            $table->string('sscregistration')->nullable();
            $table->string('sscpassingyear')->nullable();
            $table->string('sscduration')->nullable();
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
        Schema::dropIfExists('studentsscinfos');
    }
}
