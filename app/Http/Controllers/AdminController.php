<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Product;
class AdminController extends Controller
{
    public function product(){
        return view('admin.product');
    }

    public function uploadproduct(Request $request){
        $data = new product;
        $image = $request->file;
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $request->file->move('productImage', $imageName);
        $data->image = $imageName;

        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->quantity = $request->quantity;

        $data->save();

        return redirect()->back()->with('message', 'Product was added successfully');
    }

    public function showProduct(){
        $data = Product::all();
        return view('admin.showproduct', compact('data'));
    }

    public function deleteProduct($id){
        $data = Product::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Product was deleted successfully!');
    }

    public function updateview($id){
        $data = Product::find($id);
        return view('admin.updateview', compact('data'));
    }
    public function updateproduct(Request $request,$id){
        $data = Product::find($id);
        $image = $request->file;
        if ($image){
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $request->file->move('productImage', $imageName);
            $data->image = $imageName;
        }
        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->quantity = $request->quantity;

        $data->save();

        return redirect()->back()->with('message', 'Product was updated successfully');
    }

    public function showorder(){
        $order = Order::all();
        return view('admin.showorder', compact('order'));
    }

    public function updatestatus($id){
        $order = Order::find($id);
        $order->status='Delivered';
        $order->save();
        return redirect()->back();
    }
}
