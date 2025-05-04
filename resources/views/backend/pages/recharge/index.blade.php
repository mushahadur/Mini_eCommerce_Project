@extends('backend.layouts.app')
@section('title')
Recharge 
@endsection

@section('contain')
 <!-- Content Header (Page header) -->
 <div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Recharge</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active">Recharge </li>
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
                    <h3 class="card-title">রিচার্জ করার জন্য অপেক্ষা করার দিন শেষ। প্রযুক্তিসেবায় মাত্র এক ক্লিকে এখনই রিচার্জ করে ফেলুন</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form>
                    <div class="card-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">টাকার পরিমান লিখুন।</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="900 $">
                      </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Pay Submit</button>
                    </div>
                  </form>
                </div>
                <!-- /.card -->
          </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
<!-- /.content -->
@endsection