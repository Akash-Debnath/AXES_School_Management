<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentbscinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentbscinfos', function (Blueprint $table) {
            $table->id();
            $table->string('sid')->nullable();
            $table->string('bclrdegreetitle')->nullable();
            $table->string('bclrconcentration')->nullable();
            $table->string('bclrinstitutename')->nullable();
            $table->string('bclrcgpa')->nullable();
            $table->string('bclrscale')->nullable();
            $table->string('bclrlettergrade')->nullable();
            $table->string('bclrroll')->nullable();
            $table->string('bclrpassingyear')->nullable();
            $table->string('bclrduration')->nullable();
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
        Schema::dropIfExists('studentbscinfos');
    }
}
