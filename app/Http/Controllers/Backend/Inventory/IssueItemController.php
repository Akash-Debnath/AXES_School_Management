<?php

namespace App\Http\Controllers\Backend\Inventory;

use App\Http\Controllers\Controller;
use App\Models\inventory_item;
use App\Models\InventoryIssueItem;
use App\Models\ItemCategory;

use Illuminate\Http\Request;
use App\Models\IssueItem;

class IssueItemController extends Controller
{
    public function IssueItem()
    {
        $allData=IssueItem::all();
        return view('backend.inventory.issueitem.view_issueitem',compact('allData'));
    }


    public function IssueItemAdd()
    {
        return view('backend.inventory.issueitem.add_issueitem',[
            'item'=>inventory_item::all(),
            'category'=>ItemCategory::all(),
        ]);
    }

    public function store(Request $request){


        $data=new IssueItem();
        $data->issue_type=$request->issue_type;
        $data->issue_to=$request->issue_to;
        $data->issue_by=$request->issue_by;
        $data->issue_date=$request->issue_date;
        $data->return_date=$request->return_date;
        $data->note=$request->note	;
        $data->item_category_id=$request->item_category_id;
        $data->item_id	=$request->item_id	;
        $data->quantity	=$request->quantity	;
        $data->save();

        $notification = array(
            'message' => 'IssueItem Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('inventory.issueitem.view')->with($notification);

    }

    public function editissueItem($id){

        $notification = array(
            'message' => 'IssueItem Successfully',
            'alert-type' => 'success',
            'issues'=>IssueItem::where('id',$id)->first(),
            'item'=>inventory_item::all(),
            'category'=>ItemCategory::all(),
        );

        return view('backend.inventory.issueitem.edit_issue')->with($notification);

    }
    public function updateissueItem(Request $request,$id){
        $data = IssueItem::find($id);

        $data->issue_type=$request->issue_type;
        $data->issue_to=$request->issue_to;
        $data->issue_by=$request->issue_by;
        $data->issue_date=$request->issue_date;
        $data->return_date=$request->return_date;
        $data->note=$request->note	;
        $data->item_category_id=$request->item_category_id;
        $data->item_id	=$request->item_id	;
        $data->quantity	=$request->quantity	;
        $data->save();

        $notification = array(
            'message' => 'IssueItem Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('inventory.issueitem.view')->with($notification);

    }
     public function deleteissueItem( $id){
         $user = IssueItem::find($id);
         $user->delete();

         $notification = array(
             'message' => 'issue Deleted Successfully',
             'alert-type' => 'info'
         );

         return redirect()->route('inventory.issueitem.view')->with($notification);

    }




}
