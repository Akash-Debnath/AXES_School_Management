<?php

namespace App\Http\Controllers\Backend\system;

use App\Http\Controllers\Controller;
use App\Models\generalsetting;
use Illuminate\Http\Request;

class GeneralSettingController extends Controller
{
    public function generalSetting(){
        return view('backend.system.general.create-general');
    }
    public function newGeneralSetting(Request $request){
        $general=new generalsetting();
        $general->school_name=$request->school_name;
        $general->school_code=$request->school_code;
        $general->address=$request->address;
        $general->school_phone=$request->school_phone;
        $general->school_email=$request->school_email;
        $general->sch_session_id=$request->sch_session_id;
        $general->sch_start_month=$request->sch_start_month;
        $general->attendance=$request->attendance;
        $general->bio_attendance=$request->bio_attendance;
        $general->biometric_device=$request->biometric_device;
        $general->sch_lang_id=$request->sch_lang_id;
        $general->lan_mode=$request->lan_mode;
        $general->sch_date_format=$request->sch_date_format;
        $general->sch_timezone=$request->sch_timezone;
        $general->sch_start_week=$request->sch_start_week;
        $general->sch_currency=$request->sch_currency;
        $general->sch_currency_symbol=$request->sch_currency_symbol;
        $general->currency_place=$request->currency_place;
        $general->admission_no=$request->admission_no;
        $general->adm_prefix=$request->adm_prefix;
        $general->adm_no_digit=$request->adm_no_digit;
        $general->adm_start_from=$request->adm_start_from;
        $general->staff_id=$request->staff_id;
        $general->staffid_prefix=$request->staffid_prefix;
        $general->staffid_no_digit=$request->staffid_no_digit;
        $general->staffid_start_from=$request->staffid_start_from;
        $general->show_me_question=$request->show_me_question;
        $general->duplicate_fee=$request->duplicate_fee;
        $general->fee_due_days=$request->fee_due_days;
        $general->online_admission=$request->online_admission;
        $general->teacher_rest=$request->teacher_rest;
        $general->mobile_api_url=$request->mobile_api_url;
        $general->app_primary_color_code=$request->app_primary_color_code;
        $general->app_secondary_color_code=$request->app_secondary_color_code;
        $general->current_theme=$request->current_theme;
        $general->save();
        return redirect()->back()->with('message','successfully');
    }
}
