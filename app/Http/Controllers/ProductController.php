<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('index', compact('products'));
    }
    public function trash(){
        $products = Product::onlyTrashed()->get();
        return view('trash', compact('products'));
    }
    public function create(){
        return view('create');
    }

    public function store(Request $request){

        if($request->file('image')){

            $image = $request->file('image');
            $filename = rand().time().".".$image->extension();
            $location = public_path('uploads/product/images');
            $image->move($location,$filename);
            $image = $filename;
        }
        $products=new Product();

        $products->name = $request->name;
        $products->price = $request->price;
        $products->image =$image;

        $products->save();

        return back();

    }

    public function delete($id){
        $product = Product::find($id);
        $product->delete();
        return back();
    }
    public function restore($id){
        $product = Product::withTrashed()->find($id);
        $product->restore();
        return back();
    }
    public function forcedelete($id){
        $product = Product::withTrashed()->find($id);
        $product->forcedelete();
        return back();
    }
}
