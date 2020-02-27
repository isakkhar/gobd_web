<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;
use Response;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
          'product_title' => ['required', 'string', 'max:255'],
          'priority' => ['required'],
          'order_status' => ['required'],
          'office' => ['required','string'],
          'payment_type' => ['required'],
          'product_weight' => ['required'],
          'product_quantity' => ['required'],
          'customer_name' => ['required','string'],
          'customer_mobile_number' => ['required'],
          'customer_address' => ['required','string'],
      ]);
      $order_id = $request->order_id;
      $order =   Order::updateOrCreate(['id' => $order_id],
                ['product_name' => $request->product_title,
                 'priority' => $request->priority,
                 'order_status' => $request->order_status,
                 'office' => $request->office,
                 'payment_type' => $request->payment_type,
                 'product_weight' => $request->product_weight,
                 'product_quantity' => $request->product_quantity,
                 'customer_name' => $request->customer_name,
                 'customer_phone' => $request->customer_mobile_number,
                 'customer_address' => $request->customer_address,
               ]);
        if(!empty($order)){
          $msg = array('msg'=>['added succesfully!'],'type'=>['success']);
        }else{
          $msg = array('msg'=>['Somithing went wrong!'],'type'=>['error']);
        }

      return Response::json($msg);
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        if (Auth::user()->role == 'Operations') {
           $data = Order::where('approved', 1)->get();

       }elseif(Auth::user()->role == 'CS'){
            $data = Order::where('approved', 0)->get();
       }elseif(Auth::user()->role == 'Admin'){
            $data = Order::all()->first()->get();
       }
         return view('view_orders')->with('showAllOrder', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit($order_id)
    {
      if(Auth::user()->role == 'CS'){
        $update = Order::where('id', $order_id)->update(['approved' => 1]);
        $data = Order::where('approved', 0)->get();
        return view('view_orders')->with('showAllOrder', $data);
     }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
