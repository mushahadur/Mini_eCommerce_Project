@extends('admin.layout.master')

@section('body')
<div class="row">
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Edit Customer Form</h4>
                <p class="text-center text-success">{{Session::get('message')}}</p>
                <form action="{{route('customer.update',$editableCustomer->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Customer Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="{{$editableCustomer->name}}" id="horizontal-firstname-input" name="name"/>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Customer Email</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="{{$editableCustomer->email}}" id="horizontal-firstname-input" name="email"/>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Customer Phone</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="{{$editableCustomer->phone}}" id="horizontal-firstname-input" name="phone"/>
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label for="horizontal-password-input4" class="col-sm-3 col-form-label">Image</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control-file pb-3" id="horizontal-password-input4" name="image"/>
                            <img src="{{asset($editableCustomer->image)}}" alt="" height="100" width="130"/>
                        </div>
                    </div>


                    <div class="form-group row justify-content-end">
                        <div class="col-sm-9">
                            <div>
                                <button type="submit" class="btn btn-primary w-md">Update Customer Info</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
