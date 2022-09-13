<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransportroutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transportroutes', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('route_title', 100)->nullable();
            $table->float('fare', 10)->nullable();
            $table->string('is_active')->nullable()->default('no');
            $table->timestamp('created_at')->useCurrentOnUpdate()->useCurrent();
            $table->date('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transportroutes');
    }
}
