@extends('admin.layout.master')

@section('body')

<!-- Button trigger modal -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="col-md-6">
                        <ul class="nav float-end" >
                            <li class="nav-item py-2">
                                <button type="button" class="btn btn-success float-right ml-5" data-toggle="modal" data-target="#addCustomerModal">
                                    Add a New Customer
                                </button>
                                <a href="{{ route('customer.trash') }}" type="button" class="text-center btn btn-outline-danger float-left">Go to Trash</a>
                            </li>
                        </ul>
                    </div>

                    <h4 class="card-title">Customer Manage Form</h4>
                    <p class="card-title-desc text-success">{{Session::get('message')}}</p>
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
                                            <td>{{$customer->phone}}</td>
                                            <td>{{$customer->email}}</td>
                                            <
                                            <td><img src="{{asset($customer->image)}}" alt="{{$customer->name}}"  height="100" width="110"/></td>
                                            <td>
                                                <a href="{{ route('customer.edit',$customer->id) }}" class="btn btn-outline-success">
                                                    <i class='fas fa-user-edit'></i>
                                                </a>
                                                {{--  <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#editModal">
                                                    <i class="fa fa fa-trash"></i>
                                                  </button>  --}}

                                                <form action="{{ route('customer.destroy',$customer->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-outline-danger" type="submit">
                                                        <i class="fa fa fa-trash"></i>
                                                    </button>
                                                </form>

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


    <!-- Button trigger modal -->
    <!-- Modal -->


   @include('admin.customer.create')







@endsection


