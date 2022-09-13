<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeesCollectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fees_collections', function (Blueprint $table) {
            $table->id();
            $table->string('sid')->nulable();
            $table->string('invno')->nullable();
            $table->date('date')->nullable();
            $table->decimal('tamount',16, 2)->nullable();
            $table->decimal('tdiscount',16, 2)->nullable();
            $table->string('note')->nullable();
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
        Schema::dropIfExists('fees_collections');
    }
}
