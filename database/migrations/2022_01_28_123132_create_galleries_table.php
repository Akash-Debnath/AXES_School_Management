<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galleries', function (Blueprint $table) {
    
                $table->id();
                $table->string('title');
                $table->string('type');
                $table->string('image')->nullable();
                $table->string('description')->nullable();
                $table->string('category')->nullable();
                $table->string('link')->nullable();
                $table->string('file')->nullable();
                $table->string('uid')->nullable();
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
        Schema::dropIfExists('galleries');
    }
}
