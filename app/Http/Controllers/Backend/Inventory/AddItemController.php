<?php

namespace App\Http\Controllers\Backend\Inventory;

use App\Http\Controllers\Controller;
use App\Models\inventory_item;
use App\Models\InventoryStockItems;
use App\Models\Inventorystoreitem;
use App\Models\Inventorysuppliers;
use App\Models\ItemCategory;
use App\Models\ItemStore;
use Illuminate\Http\Request;
use App\Models\AddItem;

class AddItemController extends Controller
{
    public function Item()
    {
        $allData=inventory_item::all();
        return view('backend.inventory.additem.view_additem',compact('allData'));
    }

    public function AddItem()
    {
        $allData=ItemCategory::all();
        return view('backend.inventory.additem.add_additem',compact('allData'));
    }

    public function store(Request $request){


        $data=new inventory_item();
        $data->name=$request->name;
        $data->item_category=$request->item_category;
        $data->unit=$request->unit;
        $data->description=$request->description;
        $data->save();
        $notification = array(
            'message' => 'Item Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('inventory.additem.view')->with($notification);

    }

    public function editItem($id){

        $notification = array(
            'message' => 'stockitem Successfully',
            'alert-type' => 'success',
            'allData'=>ItemCategory::all(),
            'item'=>inventory_item::where('id',$id)->first(),

        );

        return view('backend.inventory.additem.edit_item')->with($notification);

    }
    public function upsateItem(Request $request,$id){
        $data = inventory_item::find($id);

        $data->name=$request->name;
        $data->item_category=$request->item_category;
        $data->unit=$request->unit;
        $data->description=$request->description;
        $data->save();
        $notification = array(
            'message' => 'Item Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('inventory.additem.view')->with($notification);

    }
    public function deleteItem( $id){
        $user = inventory_item::find($id);
        $user->delete();

        $notification = array(
            'message' => 'Item Deleted Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('inventory.additem.view')->with($notification);

    }

}
