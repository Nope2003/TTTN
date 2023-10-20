<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        
        return view('products.index', ['products'=>Product::get()]);
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jepg,jpg,png,gif|max:10000'
        ]);


        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('products'), $imageName);

        $product = new Product;
        $product->image = $imageName;
        $product->name = $request->name;
        $product->description = $request->description;

        $product->save();
        return back()->withSuccess('Add Product Success');
    }

    public function edit($id){
        // dd($id);
        $product = Product::where('id',$id)->first();
        return view('products.edit',['product' => $product]);
        
    }

    public function update(Request $request,$id){
        // dd($request->all());
        // dd($id);  
        
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'nullable|mimes:jepg,jpg,png,gif|max:10000'
        ]);

        $product = Product::where('id',$id)->first();

        if(isset($request->image))
        {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('products'), $imageName);
            $product->image = $imageName;
        }

        $product->name = $request->name;
        $product->description = $request->description;

        $product->save();
        return back()->withSuccess('Update Product Success');
    }

    public function delete($id){
        $product = Product::where('id',$id)->first();
        $product->delete();
        return back()->withSuccess('Delete Product Success');
    }

    public function show($id){
        $product = Product::where('id',$id)->first();
        
        return view('products.show',['product'=>$product]);
    }

    public function show_users($id){
        $product = Product::where('id',$id)->first();
        
        return view('users.show',['product'=>$product]);
    }
}
