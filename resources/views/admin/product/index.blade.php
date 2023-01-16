@extends('admin.layout.master')

@section('body')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="text-center">Add a New Product</h1>
                            <p class="text-center text-success">{{Session::get('message')}}</p>
                        </div>
                        <div class="card-body">
                            <form action="{{route('create.product')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-form-label col-md-4">Product Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" class="form-control" placeholder="Please Enter Product Name" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-4">Category Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="category_name" class="form-control" placeholder="Please Enter Category Name" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-4">Brand Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="brand_name" class="form-control" placeholder="Please Enter Brand Name" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-4"> Description</label>
                                    <div class="col-md-8">
                                        <textarea name="description" row="8" class="form-control" id="" cols="30" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-4">Product Status</label>
                                    <div class="col-md-8">
                                        <label for=""><input type="radio" name="status" value="1">Published</label>
                                        <label for=""><input  type="radio" name="status" value="0">Unpublished</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-4">Product Image</label>
                                    <div class="col-md-8">
                                        <input type="file" name="image" class="form-control"  />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-5"></label>
                                    <div class="col-md-8">
                                        <input type="submit" name="btn" class="btn btn-outline-success " value="Add New Product" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection



