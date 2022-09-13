<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeesCollectionDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fees_collection_details', function (Blueprint $table) {
            $table->id();
            $table->string('sid')->nulable();
            $table->string('invno')->nullable();
            $table->string('fees_master')->nullable();
            $table->decimal('amount',16, 2)->nullable();
            $table->decimal('discount',16, 2)->nullable();
            $table->string('fees_type')->nullable();
            $table->string('fees_group')->nullable();
            $table->string('fees_discount')->nullable();
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
        Schema::dropIfExists('fees_collection_details');
    }
}
