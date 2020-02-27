@extends('layouts.backend')

@section('content')
<!-- Main Container -->

<!-- Main Container -->

                <!-- Page Content -->
                <div class="content">
                    <!-- Basic -->
                    <div class="block">
                        <h3 class="block-title">Create Order</h3>
                        <div class="block-content block-content-full">
                                <div class="row push">


                                    <div class="col-lg-12 col-xl-12">
                                        <form id="createOrder" >
                                        <div class="form-group error">
                                            <label for="example-text-input">Product Title</label>
                                            <input type="text" class="form-control" id="product_title" name="product_title" placeholder="Enter The Product Name">
                                        </div>
                                         <div class="form-group error">
                                            <label for="example-select">Priority</label>
                                            <select class="form-control" id="priority" name="priority">
                                                <option selected="selected" disabled="true">Please select</option>
                                                <option >On Demand</option>
                                                <option >Same Day</option>
                                                <option >Next Day</option>
                                            </select>
                                        </div>

                                        <div class="form-group error">
                                            <label for="example-select">Order Status</label>
                                            <select class="form-control" id="order_status" name="order_status">
                                                <option selected="selected" disabled="true">Please select</option>
                                                <option >Pending</option>
                                            </select>
                                        </div>

                                        <div class="form-group error">
                                            <label for="example-select">Hub</label>
                                            <select class="form-control " id="office" name="office">
                                                <option selected="selected" disabled="true">Please select</option>
                                                <option >New Market</option>
                                                <option >Mirpur</option>
                                                <option >Uttara</option>
                                            </select>
                                        </div>
                                         <div class="form-group error">
                                            <label for="example-select">Payment Type</label>
                                            <select class="form-control " id="payment_type" name="payment_type">
                                                <option selected="selected" disabled="true">Please select</option>
                                                <option >Cash On Delivery</option>
                                                <option >Pay In Online</option>
                                            </select>
                                        </div>
                                          <div class="form-group error">
                                            <label for="example-text-input">Product Weight</label>
                                            <input type="number" class="form-control " id="product_weight" name="product_weight" placeholder="Enter The Product Weight">
                                        </div>

                                          <div class="form-group error" >
                                            <label for="example-text-input">Product Quantity</label>
                                            <input type="text" class="form-control " id="product_quantity" name="product_quantity" placeholder="Enter The Product Quantity">
                                        </div>

                                          <div class="form-group error">
                                            <label for="example-text-input">Customer Name</label>
                                            <input type="text" class="form-control " id="customer_name" name="customer_name" placeholder="Enter The Customer Name">
                                        </div>

                                          <div class="form-group error">
                                            <label for="example-text-input">Customer Mobile Number</label>
                                            <input type="text" class="form-control " id="customer_mobile_number" name="customer_mobile_number" placeholder="Enter The Customer Mobile Number">
                                        </div>

                                            <div class="form-group error">
                                            <label for="example-text-input">Customer Address</label>
                                            <input type="text" class="form-control " id="customer_address" name="customer_address" placeholder="Enter The Customer Address">
                                        </div>

                                         <div class="col-sm-12 col-xl-12">
                                        <button type="submit" id="submit" class="btn btn-success">Submit</button>
                                        <div class="mt-12">
                                            <!-- <code>btn-success</code> -->
                                        </div>
                                    </div>


                                  </form>
                                    </div>
                                </div>
                        </div>
                    </div>

                </div>
                <!-- END Page Content -->


            <!-- END Main Container -->
@endsection

@section('js_after')
<script type="text/javascript">

     $(document).on('keyup change','.form-control', function() {
         var err_id = $(this).attr('id');
         $('#' + err_id).closest('.form-control').removeClass('is-invalid');
         $('#' + err_id).closest('.error').find('.error-block').remove();
     });
     function resetform(){
          $('#createOrder').trigger("reset");
          ok();
    }
     function ok(){
         formdata = $('#createOrder');
         formdata.find('.error-block').remove();
         formdata.find('.form-control').removeClass('is-invalid');
     }
     // ajax insertion and error handling
     $('#submit').click(function (event) {
         event.preventDefault();
         ok();
         $.ajax({
             url : "{{route('new_order.store')}}",
             headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
             type: "POST",
             data : formdata.serialize(),
             success: function (response) {

               Swal.fire({
                   title: response.msg,
                   icon:  response.type,
                   showCancelButton: false,//There won't be any cancle button
                   showConfirmButton  : false,
                   timer: 1500
                 });
                 resetform();
             },
             error : function (xhr) {
                 var res = xhr.responseJSON;
                //console.log(res)
                 if ($.isEmptyObject(res) == false) {
                     $.each(res.errors, function (key, value) {
                         //console.log(value)
                         $('#' + key)
                             .closest('.error')
                             .append('<div class="invalid-feedback animated fadeIn" ><strong>' + value + '</strong></div>');

                         $('#' + key)
                             .closest('.form-control')
                             .addClass('is-invalid');
                     });
                 }
             }
         })
     });

</script>
@endsection
