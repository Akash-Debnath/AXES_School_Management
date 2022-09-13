<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddItemStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_item_stocks', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('item_id')->nullable()->index('item_id');
            $table->integer('supplier_id')->nullable()->index('supplier_id');
            $table->string('symbol', 10)->default('+');
            $table->integer('store_id')->nullable()->index('store_id');
            $table->integer('quantity')->nullable();
            $table->string('purchase_price', 100);
            $table->date('date');
            $table->string('attachment', 250)->nullable();
            $table->text('description');
            $table->string('is_active', 10)->nullable()->default('yes');
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
        Schema::dropIfExists('add_item_stocks');
    }
}
