<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_items', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('item_category_id')->nullable();
            $table->string('name');
            $table->string('unit', 100);
            $table->string('item_photo', 225)->nullable();
            $table->text('description');
            $table->timestamp('created_at')->useCurrentOnUpdate()->useCurrent();
            $table->date('updated_at')->nullable();
            $table->integer('item_store_id')->nullable();
            $table->integer('item_supplier_id')->nullable();
            $table->integer('quantity');
            $table->date('date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('add_items');
    }
}
