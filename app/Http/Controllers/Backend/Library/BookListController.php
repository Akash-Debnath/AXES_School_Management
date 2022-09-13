<?php

namespace App\Http\Controllers\Backend\Library;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BookList;

class BookListController extends Controller
{
   
    public function ViewBookList(){
    	$data['allData'] =BookList::all();
    	return view('backend.setup.booklist.view_booklist',$data);
 
    }


    public function BookListAdd(){
    	return view('backend.setup.booklist.add_booklist');
    }


    public function BookListStore(Request $request){

	    	$validatedData = $request->validate([
	    		'name' => 'required|unique:BookList,name',
	    		
	    	]);

	    	$data = new BookList();
	    	$data->name = $request->name;

	    	$data->save();

	    	$notification = array(
	    		'message' => 'BookList Inserted Successfully',
	    		'alert-type' => 'success'
	    	);

	    	return redirect()->route('booklist.view')->with($notification);

	    }



	    public function BookListEdit($id){
	    	$editData =BookList::find($id);
	    	return view('backend.setup.booklist.edit_booklist',compact('editData'));

	    }



	    public function BookListUpdate(Request $request,$id){

	    $data =BookList::find($id);
     
        $validatedData = $request->validate([
    		'name' => 'required|unique:booklist,name,'.$data->id
    		
    	]);

    	
    	$data->name = $request->name;
			$data->id = $request->id;
			$data->session_id = $request->session_id;
			$data->code = $request->code ;
			$data->amount= $request->amount;
			$data->description = $request->description;
			$data->	is_active = $request->	is_active;
    	$data->save();

    	$notification = array(
    		'message' => 'BookList Updated Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('booklist.view')->with($notification);
    }


           public function BookListDelete($id){
	    	$user = BookList::find($id);
	    	$user->delete();

	    	$notification = array(
	    		'message' => 'BookList Deleted Successfully',
	    		'alert-type' => 'info'
	    	);

	    	return redirect()->route('booklist.view')->with($notification);

	    }
}
