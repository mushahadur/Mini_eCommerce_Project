@extends('admin.layout.master')

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">{{$product->name}}Detail Information</h3>
                    <p class="card-title-desc">{{Session::get('message')}}</p>
                    <table class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <tr>
                            <th>Product ID</th>
                            <td>{{$product->id}}</td>
                        </tr>
                        <tr>
                            <th>Product Name</th>
                            <td>{{$product->name}}</td>
                        </tr>
                        <tr>
                            <th>Category Name</th>
                            <td>{{$product->category_name}}</td>
                        </tr>
                        <tr>
                            <th>Brand Name</th>
                            <td>{{$product->brand_name}}</td>
                        </tr>

                        <tr>
                            <th>Product Description</th>
                            <td>{!! $product->description !!}</td>
                        </tr>


                        <tr>
                            <th>Product Image</th>
                            <td><img src="{{asset($product->image)}}" alt="" height="200" width="220"/></td>
                        </tr>

                        <tr>
                            <th>Product Published Status</th>
                            <td>{{$product->status == 1 ? 'Product Published' : 'Not Available'}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection





