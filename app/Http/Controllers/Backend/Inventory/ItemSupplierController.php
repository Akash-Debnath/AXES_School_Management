<?php

namespace App\Http\Controllers\Backend\Inventory;

use App\Http\Controllers\Controller;
use App\Models\Inventorystoreitem;
use App\Models\Inventorysuppliers;
use App\Models\ItemCategory;
use Illuminate\Http\Request;
use App\Models\ItemSupplier;

class ItemSupplierController extends Controller
{
    public function Itemsupplier()
    {
        $allData=Inventorysuppliers::all();
        return view('backend.inventory.itemsupplier.view_itemsupplier',compact('allData'));
    }

    public function AddItemsupplier()
    {
        return view('backend.inventory.itemsupplier.add_itemsupplier');
    }
    public function store(Request $request){
        $data = new Inventorysuppliers();
        $data->item_supplier = $request->item_supplier;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->address = $request->address;
        $data->contact_person_name = $request->contact_person_name;
        $data->contact_person_phone = $request->contact_person_phone;
        $data->contact_person_email = $request->contact_person_email;
        $data->description = $request->description;
        $data->save();

        $notification = array(
            'message' => 'Department Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('inventory.itemsupplier.view')->with($notification);
    }


    public function editSupplier($id){

        $notification = array(
            'message' => 'supplier item edit Successfully',
            'alert-type' => 'success',
            'supplier'=>Inventorysuppliers::where('id',$id)->first(),

        );

        return view('backend.inventory.itemsupplier.edit_itemsupplier')->with($notification);

    }
    public function updateItemSupplier(Request $request,$id){
        $data = Inventorysuppliers::find($id);
        $data->item_supplier = $request->item_supplier;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->address = $request->address;
        $data->contact_person_name = $request->contact_person_name;
        $data->contact_person_phone = $request->contact_person_phone;
        $data->contact_person_email = $request->contact_person_email;
        $data->description = $request->description;
        $data->save();

        $notification = array(
            'message' => 'Department Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('inventory.itemsupplier.view')->with($notification);

    }
    public function deleteSupplier( $id){
        $user = Inventorysuppliers::find($id);
        $user->delete();

        $notification = array(
            'message' => 'supplier Deleted Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('inventory.itemsupplier.view')->with($notification);

    }

}
