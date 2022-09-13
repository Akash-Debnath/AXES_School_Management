<?php

namespace App\Http\Controllers\Backend\Website\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\ContactForm;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function AdminContact(){
        $contacts = Contact::all();
        return view('backend.webinfo.contact.index',compact('contacts'));
    }
   
    public function AdminAddContact(){
        return view('backend.webinfo.contact.create');
    }
   
    public function AdminStoreContact(Request $request){

     //dd($request->all());

       $data = new Contact();
       $data->email = $request->email;
       $data->phone = $request->phone;
       $data->address = $request->address;
       $data->save();



       $notification = array(
         'message' => 'Contact  Added Successfully',
         'alert-type' => 'success'
       );
       return redirect()->route('webinfo.contact.index')->with($notification);

   
    }
    
   
       public function Contact(){
           $contacts = DB::table('contacts')->first();
           return view('user.contact',compact('contacts'));
       }
   
   
       public function ContactForm(Request $request){
           //dd($request);
           ContactForm::insert([
               'name' => $request->name,
               'email' => $request->email,
               'subject' => $request->subject,
               'message' => $request->message,
               'created_at' => Carbon::now()
           ]);
       
           return Redirect()->route('contact')->with('success','Your Message Send Successfully');
   
       }
   
       public function AdminMessage(){
           $messages = ContactForm::all();
           return view('backend.webinfo.contact.message',compact('messages'));
       }
       
       public function delete($id){
        $data = ContactForm::find($id);
        $data->delete();

        $notification = array(
            'message' => 'Contact Messages Deleted Successfully',
            'alert-type' => 'danger'
        );

        return redirect()->route('webinfo.contact.message')->with($notification);

}
}
 