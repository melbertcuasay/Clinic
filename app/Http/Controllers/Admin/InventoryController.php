<?php

namespace App\Http\Controllers\Admin;

use App\Models\Inventory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class InventoryController extends Controller
{
    public function inventory()
    {
        $stocks = DB::table('inventories')->get();
        return view ('admin.inventory', compact('stocks'));
    }

    public function stocks()
    {
        return view ('admin.stocks');
    }

    public function savestocks(Request $request)
    {
       $stocks = new Inventory;

       $stocks->product_name = $request->product_name;
       $stocks->type = $request->type;
       $stocks->description = $request->description;
       $stocks->status = 'Active';
       $stocks->quantity = $request->quantity;

       $stocks->save();
       Alert::success('Stocks Added Successfully', 'New Stock Added');
       return redirect()->back();
    }

    public function updatestocks($id)
    {
        $stocks = Inventory::find($id);
        return view ('admin.updatestocks', compact('stocks'));
    }

    public function editstocks(Request $request,$id)
    {
        $stocks = Inventory::find($id);

       $stocks->product_name = $request->product_name;
       $stocks->type = $request->type;
       $stocks->description = $request->description;
       $stocks->status = 'Active';
       $stocks->quantity = $request->quantity;

       $stocks->save();
       Alert::success('Stocks Update Successfully', 'Stock Updated');
       return redirect()->back();
    }
}
