@extends('layout.app')
@section('content')
<div class="container px-4">
    <div class="card rounded-lg mt-5">
        <div class="card-header"><h3 class="font-weight-light my-4">Add Product</h3></div>
        <div class="card-body">
            <form>
                <div class="form-floating mb-3">
                    <input class="form-control" id="productName" type="text" placeholder="Product Name" />
                    <label for="productName">Product Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" id="Price" type="text" placeholder="Unit Price" />
                    <label for="Price">Price</label>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" id="Quantity" type="number" placeholder="Quantity" />
                    <label for="Quantity">Quantity</label>
                </div>
                <div class="form-floating mb-3">
                    <button class="btn btn-primary float-end" type="submit">Add Product</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection