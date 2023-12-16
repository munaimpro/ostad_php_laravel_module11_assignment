<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function allProduct(){
        return view('allproducts');
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
}
