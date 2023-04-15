@extends('admin.layout.master')

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div>
                        <a href="{{ url('/customer') }}" type="button" class="text-center btn btn-outline-primary float-right mb-3">Go to Manage</a>
                    </div>
                    <h4 class="card-title">Customer Trash Form</h4>
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
                                        <th>Customer Name</th>
                                        <th>Customer Email</th>
                                        <th>Customer Phone</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($customers as $customer)
                                        <tr class="">
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$customer->name}}</td>
                                            <td>{{$customer->email}}</td>
                                            <td>{{$customer->phone}}</td>
                                            <td><img src="{{asset($customer->image)}}" alt="{{$customer->name}}"  height="100" width="110"/></td>
                                            <td>
                                                <a href='{{route('customer.undo', ['id' => $customer->id])}}' type="button" class="btn btn-outline-success">Undo</a>
                                                <a href='{{route('customer.forceDelete', ['id' => $customer->id])}}' type="button" class="btn btn-outline-danger">Delete</a>
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


