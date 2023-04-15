<div class="modal fade" id="addCustomerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title text-center" id="exampleModalLabel">Cutomer Form</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
          <div class="modal-body">
            <form action="{{route('customer.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label  class="form-label"> Customer Name</label>
                    <input type="text" placeholder="Enter Your Name" name="name" class="form-control" id="" value="{{old('name')}}">
                    

                </div>
                <div class="mb-3">
                    <label  class="form-label"> Customer Phone</label>
                    <input type="text" class="form-control" name="phone" placeholder="Enter Customer Phone">

                </div>
                <div class="mb-3">
                    <label  class="form-label"> Customer Email</label>
                    <input type="text" class="form-control"  name="email" placeholder="Enter Customer Email">

                </div>

                <div class="mb-3">
                    <label  class="form-label">Customer Image</label>
                    <input type="file" class="form-control"  name="image">
                    <p id="serviceImageRequire" class="text-danger d-none">Image is Require</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" name="btn" class="btn btn-success " value="Add a New Customer" />
                    {{--  <button type="button" class="btn btn-primary">Add a New Customer</button>  --}}
                </div>
            </form>
      </div>
    </div>
  </div>
