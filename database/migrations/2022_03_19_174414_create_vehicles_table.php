<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('vehicle_no', 20)->nullable();
            $table->string('vehicle_model', 100)->default('None');
            $table->string('manufacture_year', 4)->nullable();
            $table->string('driver_name', 50)->nullable();
            $table->string('driver_licence', 50)->default('None');
            $table->string('driver_contact', 20)->nullable();
            $table->text('note')->nullable();
            $table->timestamp('created_at')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
}
