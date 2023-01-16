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
                                        <th>User Name</th>
                                        <th>User Email</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($users as $user)
                                        <tr >
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>


                                            <td>
                                                <a href="" class="btn btn-outline-success">
                                                    <i class='fas fa-user-edit'></i>
                                                </a>

                                                <a href="" class="btn btn-outline-danger" >
                                                    <i class="fa fa fa-trash"></i>
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



