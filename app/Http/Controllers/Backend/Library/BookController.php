<?php

namespace App\Http\Controllers\Backend\Library;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
   
    public function ViewBook(){
    	$data['allData'] =Book::all();
    	return view('backend.library.book.view_book',$data);
 
    }


    public function BookAdd(){
    	return view('backend.library.book.add_book');
    }


    public function BookStore(Request $request){
	

	    	$validatedData = $request->validate([
	    		'book_title' => 'required|unique:books,book_title',
				'author' => 'required',
				'isbn_no' => 'required'
	    		
	    	]);

	    	$data = new Book();
	    	$data->book_title = $request->book_title;
			$data->book_no = $request->book_no;
			$data->isbn_no = $request->isbn_no;
			$data->publish = $request->publish;
			$data->author = $request->author;
			$data->subject = $request->subject;

			$data->rack_no = $request->rack_no;
			$data->qty = $request->qty;
			$data->price = $request->price;
			$data->postdate = $request->postdate;
			$data->description = $request->description;

	    	$data->save();

	    	$notification = array(
	    		'message' => 'Book Inserted Successfully',
	    		'alert-type' => 'success'
	    	);

	    	return redirect()->route('library.book.view_book')->with($notification);

	    }



	    public function BookEdit($id){
	    	$editData =Book::find($id);
	    	return view('backend.library.book.edit_book',compact('editData'));

	    }



	    public function BookUpdate(Request $request,$id){

	    $data =Book::find($id);
     
        $validatedData = $request->validate([
    		'book_title' => 'required|unique:books,book_title'.$data->id
    		
    	]);

    	
		$data->book_title = $request->book_title;
		$data->book_no = $request->book_no;
		$data->isbn_no = $request->isbn_no;
		$data->publish = $request->publish;
		$data->author = $request->author;
		$data->subject = $request->subject;

		$data->rack_no = $request->rack_no;
		$data->qty = $request->qty;
		$data->price = $request->price;
		$data->postdate = $request->postdate;
		$data->description = $request->description;

		$data->save();

    	$notification = array(
    		'message' => 'Book Updated Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('library.book.view_book')->with($notification);
    }


           public function BookDelete($id){
	    	$user = Book::find($id);
	    	$user->delete();

	    	$notification = array(
	    		'message' => 'Book Deleted Successfully',
	    		'alert-type' => 'info'
	    	);

	    	return redirect()->route('library.book.view_book')->with($notification);

	    }
}
