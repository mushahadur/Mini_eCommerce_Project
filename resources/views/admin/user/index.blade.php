@extends('admin.layout.master')

@section('body')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="text-center">Add a New User</h1>
                            <p class="text-center text-success">{{Session::get('message')}}</p>
                        </div>
                        <div class="card-body">
                            <form action="{{route('create.user')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-form-label col-md-4">User Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" class="form-control" placeholder="Please Enter User Name" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-4">User Email</label>
                                    <div class="col-md-8">
                                        <input type="email" name="email" class="form-control" placeholder="Please Enter Email " />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-4">User Password</label>
                                    <div class="col-md-8">
                                        <input type="password" name="password" class="form-control" placeholder="Please Enter Password " />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-5"></label>
                                    <div class="col-md-8">
                                        <input type="submit" name="btn" class="btn btn-outline-success " value="Add New User" />
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



