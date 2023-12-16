<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    public function dashboard(){
        return view('index');
    }
    
    public function allProduct(){
        $getProducts = DB::table('products')->get();
        return view('allproducts', compact('getProducts'));
    }

    public function allTransaction(){
        return view('alltransaction');
    }
    public function addProduct(){
        return view('addproduct');
    }

    public function editProduct(){
        return view('editproduct');
    }

    public function sellProduct(){
        return view('sell-product');
    }

    public function deleteProduct($id){
        $product = DB::table('products')->where('id', $id)->delete();
        if($product){
            return back();
        }
    }

    public function productAdd(Request $request){
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'quantity' => 'required'
        ]);

        $productName     = $request->input('name');
        $productPrice    = $request->input('price');
        $productQuantity = $request->input('quantity');

        $result = DB::table('products')->insert([
            'name' => $productName,
            'unit_price' => $productPrice,
            'quantity' => $productQuantity
        ]);

        if($result){
            return redirect('/add-product')->with('successmsg', 'Product added successfully');
        } else{
            return redirect('/add-product')->with('errormsg', 'Something went wrong!');
        }

    }



}
