<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('email')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            // $table->string('id_no')->nullable();
            // $table->string('password');
            // $table->string('usertype')->nullable()->comment('Student,Employee,Admin');
            // $table->string('code')->nullable();
            // $table->string('name')->nullable();
            // $table->string('fname')->nullable();
            // $table->string('mname')->nullable();
            // $table->string('mobile')->nullable();
            // $table->string('address')->nullable();
            // $table->string('gender')->nullable();
            // $table->string('email')->nullable();
            // $table->string('caste')->nullable();
            // $table->string('blgroup')->nullable();        
            // $table->string('image')->nullable();            
            // $table->string('discount')->nullable();
            // $table->string('height')->nullable();
            // $table->string('weight')->nullable();
            // $table->string('fphone')->nullable();
            // $table->string('foccupation')->nullable();
            // $table->string('mphone')->nullable();
            // $table->string('moccupation')->nullable();
            // $table->string('gname')->nullable();
            // $table->string('grelation')->nullable();
            // $table->string('gemail')->nullable();
            // $table->string('gphone')->nullable();
            // $table->string('goccupation')->nullable();
            // $table->string('gaddress')->nullable(); 
            // $table->string('religion')->nullable();
            // $table->date('dob')->nullable();
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
        Schema::dropIfExists('students');
    }
}
