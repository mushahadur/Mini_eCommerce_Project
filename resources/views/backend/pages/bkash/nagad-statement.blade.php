@extends('backend.layouts.app')
@section('title')
    Nagad  Statement
@endsection

@section('contain')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Nagad  Statement</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Nagad  Statement</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- general form elements -->
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Nagad  Statement অর্ডার করুন।</h3>
                        </div>
                        <div class="card card-danger card-outline m-2">
                            <div class="card-header">
                                <h5 class="card-title text-danger">Nagad  Statement এর জন্য 1400.00 টাকা কাটা হবে।</h5>
                            </div>
                        </div>

                        <!-- /.card-header -->
                        <!-- form start -->
                        <form>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Select Type:</label>
                                    <select class="form-control">
                                        <option>Select</option>
                                        <option>Nagad  Number</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">বিকাশ নাম্বারঃ</label>
                                    <input type="number" class="form-control" id="exampleInputEmail1"
                                        placeholder="0174154745">
                                </div>
                            </div>

                            <div class="form-group px-3">
                                <label>Nagad  Statement সম্পর্কে বিস্তারিত লিখুনঃ(যদি কিছু বলার থাকে)</label>
                                <textarea class="form-control" rows="2" placeholder="বিস্তারিত লিখুন.."></textarea>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit Order</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
              {{-- Previous Order --}}
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header card-info card-outline">
                <h2 class="card-title text-bold">Previous Order</h2>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nagad  Number</th>
                      <th>Order Date</th>
                      <th>Status</th>
                      <th>Download</th>
                      <th>Delivery Date</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>183</td>
                      <td>012474845744</td>
                      <td>11-7-2026</td>
                      <td><span class="tag tag-success">Approved</span></td>
                      <td>DD</td>
                      <td>11-7-2026</td>
                    </tr>
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
