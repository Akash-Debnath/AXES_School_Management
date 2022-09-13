<?php

namespace App\Http\Controllers\Backend\Inventory;

use App\Http\Controllers\Controller;
use App\Models\Inventorystoreitem;
use App\Models\ItemCategory;
use Illuminate\Http\Request;
use App\Models\ItemStore;

class ItemStoreController extends Controller
{
    public function ItemStore()
    {
        $allData=Inventorystoreitem::get();
        return view('backend.inventory.itemstore.view_itemstore',compact('allData'));
    }


    public function AddItemStore()
    {

        return view('backend.inventory.itemstore.add_itemstore');
    }

    public function store(Request  $request){
        $data = new Inventorystoreitem();
        $data->item_store = $request->item_store;
        $data->code = $request->code;
        $data->description = $request->description;
        $data->save();

        $notification = array(
            'message' => 'Department Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('inventory.itemstore.view')->with($notification);
    }


    public function editItemstore($id){

        $notification = array(
            'message' => 'store item edit Successfully',
            'alert-type' => 'success',
            'itemstore'=>Inventorystoreitem::where('id',$id)->first(),

        );

        return view('backend.inventory.itemstore.edit_itemstore')->with($notification);

    }
    public function updateItemstore(Request $request,$id){
        $data = Inventorystoreitem::find($id);
        $data->item_store = $request->item_store;
        $data->code = $request->code;
        $data->description = $request->description;
        $data->save();

        $notification = array(
            'message' => 'update Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('inventory.itemstore.view')->with($notification);

    }
    public function deleteItemstore( $id){
        $user = Inventorystoreitem::find($id);
        $user->delete();

        $notification = array(
            'message' => 'store Deleted Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('inventory.itemstore.view')->with($notification);

    }

}
