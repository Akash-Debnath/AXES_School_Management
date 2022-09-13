<?php

namespace App\Http\Controllers\Backend\Inventory;

use App\Http\Controllers\Controller;
use App\Models\inventory_item;
use App\Models\InventoryStockItems;
use App\Models\Inventorystoreitem;
use App\Models\Inventorysuppliers;
use App\Models\ItemCategory;
use Illuminate\Http\Request;
use App\Models\AddItemStock;

class AddItemStockController extends Controller
{
    public function ItemStock()
    {
        $allData=InventoryStockItems::all();
        return view('backend.inventory.additemstock.view_additemstock',compact('allData'));
    }
    public function AddItemStock()
    {

        return view('backend.inventory.additemstock.add_additemstock',[
            'categorys'=>ItemCategory::all(),
            'items'=>inventory_item::all(),
            'suppliers'=>Inventorysuppliers::all(),
            'stores'=>Inventorystoreitem::all(),
        ]);
    }

    public function store(Request  $request){

         $data = new InventoryStockItems();
        $data->category_id = $request->category_id;
        $data->item_id = $request->item_id;
        $data->supplier_id = $request->supplier_id;
        $data->store_id = $request->store_id;
        $data->symbol = $request->symbol;
        $data->purchase_price = $request->purchase_price;
        $data->date = $request->date;
        $data->attachment = $request->attachment;
        $data->description = $request->description;
        $data->save();

        $notification = array(
            'message' => 'Department Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('inventory.additemstock.view')->with($notification);
    }
    public function editItemStock($id){

        $notification = array(
            'message' => 'stockitem Successfully',
            'alert-type' => 'success',
            'stock'=>InventoryStockItems::where('id',$id)->first(),
            'categorys'=>ItemCategory::all(),
            'items'=>inventory_item::all(),
            'suppliers'=>Inventorysuppliers::all(),
            'stores'=>Inventorystoreitem::all(),
        );

        return view('backend.inventory.additemstock.edit_item_stock')->with($notification);

    }
    public function updateItemStock(Request $request,$id){
        $data = InventoryStockItems::find($id);

        $data->category_id = $request->category_id;
        $data->item_id = $request->item_id;
        $data->supplier_id = $request->supplier_id;
        $data->store_id = $request->store_id;
        $data->symbol = $request->symbol;
        $data->purchase_price = $request->purchase_price;
        $data->date = $request->date;
        $data->attachment = $request->attachment;
        $data->description = $request->description;
        $data->save();

        $notification = array(
            'message' => 'stock item update Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('inventory.additemstock.view')->with($notification);

    }
    public function deleteItemStock( $id){
        $user = InventoryStockItems::find($id);
        $user->delete();

        $notification = array(
            'message' => 'stock Deleted Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('inventory.additemstock.view')->with($notification);

    }

}
