<?php

namespace App\Http\Controllers\Backend\system;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BackupSettingController extends Controller
{
    public function backupSetting(){
        return view('backend.system.backupsetting.create-backup');
    }
}
