<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentmscinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentmscinfos', function (Blueprint $table) {
            $table->id();
            $table->string('sid')->nullable();
            $table->string('mastersdegreetitle')->nullable();
            $table->string('mastersconcentration')->nullable();
            $table->string('mastersinstitutename')->nullable();
            $table->string('mastersgpa')->nullable();
            $table->string('mastersscale')->nullable();
            $table->string('masterslettergrade')->nullable();
            $table->string('mastersroll')->nullable();
            $table->string('masterspassingyear')->nullable();
            $table->string('mastersduration')->nullable();
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
        Schema::dropIfExists('studentmscinfos');
    }
}
