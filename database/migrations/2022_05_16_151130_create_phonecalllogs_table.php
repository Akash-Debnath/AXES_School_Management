<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhonecalllogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phonecalllogs', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('Phone', 12);
            $table->string('date', 100);
            $table->string('description', 50);
            $table->integer('next_follow_up_date');
            $table->date('call_duration');
            $table->text('note');
            $table->string('call_type', 100);
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
        Schema::dropIfExists('phonecalllogs');
    }
}
