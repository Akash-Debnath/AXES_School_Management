<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralsettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generalsettings', function (Blueprint $table) {
            $table->id();
            $table->string('school_name')->nullable();
            $table->string('school_code')->nullable();
            $table->string('address')->nullable();
            $table->string('school_phone')->nullable();
            $table->string('school_email')->nullable();
            $table->string('sch_session_id')->nullable();
            $table->string('sch_start_month')->nullable();
            $table->string('attendance')->nullable();
            $table->string('bio_attendance')->nullable();
            $table->string('biometric_device')->nullable();
            $table->string('sch_lang_id')->nullable();
            $table->string('lan_mode')->nullable();
            $table->string('sch_date_format')->nullable();
            $table->string('sch_timezone')->nullable();
            $table->string('sch_start_week')->nullable();
            $table->string('sch_currency')->nullable();
            $table->string('sch_currency_symbol')->nullable();
            $table->string('currency_place')->nullable();
            $table->string('admission_no')->nullable();
            $table->string('adm_prefix')->nullable();
            $table->string('adm_no_digit')->nullable();
            $table->string('adm_start_from')->nullable();
            $table->string('staff_id')->nullable();
            $table->string('staffid_prefix')->nullable();
            $table->string('staffid_no_digit')->nullable();
            $table->string('staffid_start_from')->nullable();
            $table->string('show_me_question')->nullable();
            $table->string('duplicate_fee')->nullable();
            $table->string('fee_due_days')->nullable();
            $table->string('online_admission')->nullable();
            $table->string('teacher_rest')->nullable();
            $table->string('mobile_api_url')->nullable();
            $table->string('app_primary_color_code')->nullable();
            $table->string('app_secondary_color_code')->nullable();
            $table->string('current_theme')->nullable();
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
        Schema::dropIfExists('generalsettings');
    }
}
