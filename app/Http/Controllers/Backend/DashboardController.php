<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Expense;
use App\Models\AddStaffMember;
use App\Models\Accountpayment;
use App\Models\Accountreceive;
use App\Models\Book;
use App\Models\User;
use App\Models\FeesCollection;
use DB;


class DashboardController extends Controller
{
    public function dashboard()
    {
      $data['totalpayment']= Accountpayment::sum('amount');
        $data['totalreceive']= Accountreceive::sum('amount');
        $data['totalcollection']= FeesCollection::sum('tamount');
       $data['totalexpense']= Expense::sum('amount');
        $data['totalstudent']= Student::count();
        $data['totalteacher']= Teacher::count();
       $data['totalbook']= Book::count();
        $data['totaluser']= User::count();

        $data['lastpayments']=Accountpayment::latest()->take(5)->get();
        $data['lastreceives'] =Accountreceive::latest()->take(5)->get();
         $data['lastcollections']=FeesCollection::latest()->take(5)->get();
        $data['lastexpenses']=Expense::latest()->take(5)->get();


        return view('admin.index',$data);
    }
   
}
