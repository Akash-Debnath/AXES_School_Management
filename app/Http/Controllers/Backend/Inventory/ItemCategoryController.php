<?php

namespace App\Http\Controllers\Backend\Inventory;

use App\Http\Controllers\Controller;
//use App\Models\inventory_item;
use Illuminate\Http\Request;
use App\Models\ItemCategory;

class ItemCategoryController extends Controller
{


    public function ItemCategory()
    {
        $allData=ItemCategory::get();
        return view('backend.inventory.itemcategory.view_itemcategory',compact('allData'));
    }


    public function ItemCategoryAdd()
    {
        return view('backend.inventory.itemcategory.add_itemcategory');
    }

    public function store(Request $request){

        $data = new  ItemCategory();
        $data->item_category = $request->item_category;
        $data->description = $request->description;
        $data->save();

        $notification = array(
            'message' => 'ItemCategory Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('inventory.itemcategory.view')->with($notification);
    }


    public function editCategory($id){

        $notification = array(
            'message' => 'stockitem Successfully',
            'alert-type' => 'success',
            'category'=>ItemCategory::where('id',$id)->first(),

        );

        return view('backend.inventory.itemcategory.edit_category')->with($notification);

    }
    public function updateCategory(Request $request,$id){
        $data = ItemCategory::find($id);

        $data->item_category = $request->item_category;
        $data->description = $request->description;
        $data->save();

        $notification = array(
            'message' => 'category edit  Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('inventory.itemcategory.view')->with($notification);

    }
    public function deleteItem( $id){
        $user = ItemCategory::find($id);
        $user->delete();

        $notification = array(
            'message' => 'category Deleted Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('inventory.additem.view')->with($notification);

    }
}
