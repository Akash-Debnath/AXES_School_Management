<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitorsBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitors_books', function (Blueprint $table) {
            $table->integer('id', true);
             $table->string('purpose');
            $table->string('name', 100);
            $table->string('email', 100)->nullable();
            $table->string('Phone', 12);
            $table->string('id_card', 50);
            $table->integer('no_of_people');
            $table->date('date');
            $table->string('in_time', 20);
            $table->string('out_time', 20);
            $table->text('note');
            $table->string('image', 100);
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
        Schema::dropIfExists('visitors_books');
    }
}
