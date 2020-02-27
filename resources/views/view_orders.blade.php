@extends('layouts.backend')

@section('css_after')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')
  <div class="content">
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Product Name</th>
                <th>Priority</th>
                <th>Order Status</th>
                <th>Office</th>
                <th>Payment Type</th>
                <th>Product weight</th>
                <th>Product quantity</th>
                <th>Customer Name</th>
                <th>Customer Phone</th>
                <th>Customer Address</th>
                <th>Approve</th>
            </tr>
        </thead>
        <tbody>

           @foreach ($showAllOrder as $key => $value)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$value->product_name}}</td>
                <td>{{$value->priority}}</td>
                <td>{{$value->order_status}}</td>
                <td>{{$value->office}}</td>
                <td>{{$value->payment_type}}</td>
                <td>{{$value->product_weight}}</td>
                <td>{{$value->product_quantity}}</td>
                <td>{{$value->customer_name}}</td>
                <td>{{$value->customer_phone}}</td>
                <td>{{$value->customer_address}}</td>
                @php if(Auth::user()->role == 'CS'){ @endphp
                <td><a href="{{url('/view-orders/'.$value->id)}}" class="btn btn-success" >Approve</a></td>
                @php }elseif(Auth::user()->role == 'Admin'){
                    if($value->approved == 0){
                @endphp
                <td style="color:green" >Approved</td>
                @php }else{ @endphp
                <td style="color:red" >Not approved</td>
                @php } } @endphp
            </tr>
            @endforeach
        </tbody>
{{--        <tfoot>--}}
{{--            <tr>--}}
{{--              <th>No</th>--}}
{{--              <th>Product Name</th>--}}
{{--              <th>Priority</th>--}}
{{--              <th>Order Status</th>--}}
{{--              <th>Office</th>--}}
{{--              <th>Payment Type</th>--}}
{{--              <th>Product_weight</th>--}}
{{--              <th>Product_quantity</th>--}}
{{--              <th>Customer Name</th>--}}
{{--              <th>Customer Phone</th>--}}
{{--              <th>Customer Address</th>--}}
{{--              <th>Approve</th>--}}
{{--            </tr>--}}
{{--        </tfoot>--}}
    </table>
  </div>
@endsection
@section('js_after')
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable({
      "autoWidth": true
    });
} );
</script>
@endsection
