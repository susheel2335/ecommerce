<?php

namespace App\Http\Controllers;

use App\OrderManage;
use Illuminate\Http\Request;

class OrderManageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $header =[
            'title'      => 'Order Manage',
            'pageTitle'  => 'Pending Orders',
            'modalSize'  => 'modal-md',
         ];
        $orders = OrderManage::pendingOrders();
        return view('admin.layouts.orderManage.pending', compact('orders','header'));
    }
    public function receivedOrders()
    {
        $header =[
            'title'      => 'Order Manage',
            'pageTitle'  => 'Received Orders',
            'modalSize'  => 'modal-md',
         ];
        $orders = OrderManage::receivedOrders();
        return view('admin.layouts.orderManage.received', compact('orders','header'));
    }

    public function orderProcessing()
    {
        $header =[
            'title'      => 'Order Manage',
            'pageTitle'  => 'Order Processing',
            'modalSize'  => 'modal-md',
         ];
        $orders = OrderManage::orderProcessing();
        return view('admin.layouts.orderManage.processing', compact('orders','header'));
    }


    public function deliveredOrders()
    {
        $header =[
            'title'      => 'Order Manage',
            'pageTitle'  => 'Delivered Order',
            'modalSize'  => 'modal-md',
         ];
        $orders = OrderManage::deliveredOrders();
        return view('admin.layouts.orderManage.delivered', compact('orders','header'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = OrderManage::order($id);
        return view('admin.layouts.orderManage.details');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
