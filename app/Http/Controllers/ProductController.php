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
}
