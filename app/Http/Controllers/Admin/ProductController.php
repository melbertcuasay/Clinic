<?php

namespace App\Http\Controllers\Admin;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    public function products()
    {
        $products = DB::table('products')->get();
        return view ('admin.products', compact('products'));
    }

    public function addproducts()
    {
        return view ('admin.addproducts');
    }

    public function saveproducts(Request $request)
    {
        $products = new Products;

        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('assets/uploads/products', $imagename);
        $products->image = $imagename;

        $products->product_name = $request->input('product_name');
        $products->product_type = $request->input('product_type');
        $products->description = $request->input('description');

        $products->save();
        Alert::success('Product Added Successfully', 'New Product in the Database');
        return redirect()->back();
    }

    public function updateproducts($id)
    {
        $products = Products::find($id);
        return view ('admin.updateproducts',compact('products'));
    }

    public function editproducts(Request $request,$id)
    {
        $products = Products::find($id);

        $products->product_name = $request->product_name;
        $products->product_type = $request->product_type;
        $products->description = $request->description;
        
        $image = $request->image;
        if($image)
        {
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('assets/uploads/products', $imagename);
            $products->image = $imagename;
        }
       
        $products->save();
        Alert::success('Product Update Successfully', 'Product Update in the Database');
        return redirect()->back();
    }

    public function deleteproducts($id)
    {
        $products = Products::find($id);

        $products->delete();

        return redirect()->back();
    }
}
