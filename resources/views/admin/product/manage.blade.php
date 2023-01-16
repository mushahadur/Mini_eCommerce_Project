@extends('admin.layout.master')

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Product Manage Form</h4>
                    <p class="card-title-desc">{{Session::get('message')}}</p>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>SL NO</th>
                                        <th>Product Name</th>
                                        <th>Category Name</th>
                                        <th>Brand Name</th>
                                        <th>Status</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($products as $product)
                                        <tr class="{{$product->status == 1 ? '' : 'bg-warning'}}">
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$product->name}}</td>
                                            <td>{{$product->category_name}}</td>
                                            <td>{{$product->brand_name}}</td>
                                            <td>{{$product->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                            <td><img src="{{asset($product->image)}}" alt="{{$product->name}}"  height="100" width="110"/></td>
                                            <td>
                                                <a href="{{route('product.edit', ['id' => $product->id])}}" class="btn btn-outline-success">
                                                    <i class='fas fa-user-edit'></i>
                                                </a>
                                                <a href="{{route('product.update-status', ['id' => $product->id])}}" class="btn btn-outline-primary">
                                                    <i class="fa fa-arrow-up"></i>
                                                </a>
                                                <a href="{{route('product.delete', ['id' => $product->id])}}" class="btn btn-outline-danger" >
                                                    <i class="fa fa fa-trash"></i>
                                                </a>
                                                <a href="{{route('product.detail', ['id' => $product->id])}}" class="btn btn-outline-secondary" >
                                                    <i class="fa fa-book-open"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection


