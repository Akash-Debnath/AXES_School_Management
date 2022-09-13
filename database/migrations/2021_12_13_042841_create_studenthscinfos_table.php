<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudenthscinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studenthscinfos', function (Blueprint $table) {
            $table->id();
            $table->string('sid')->nullable();
            $table->string('hscexamtitle')->nullable();
            $table->string('hscconcentration')->nullable();
            $table->string('hscinstitutename')->nullable();
            $table->string('hscboard')->nullable();
            $table->string('hsclettergrade')->nullable();
            $table->string('hscgpa')->nullable();
            $table->string('hscgpa4subject')->nullable();
            $table->string('hscscale')->nullable();
            $table->string('hscroll')->nullable();
            $table->string('hscregistration')->nullable();
            $table->string('hscpassingyear')->nullable();
            $table->string('hscduration')->nullable();
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
        Schema::dropIfExists('studenthscinfos');
    }
}
