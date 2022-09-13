<?php

namespace App\Http\Controllers\Backend\system;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NotificationSettingController extends Controller
{
    public function notificationSetting(){
        return view('backend.system.notification.create-notification');
    }
}
