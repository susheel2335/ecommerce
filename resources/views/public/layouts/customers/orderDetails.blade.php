<section id="do_action">
    <div class="row" style="margin:0!important;">
           <div class="shopper-info">
                <div class="table-responsive">
                    <table class="table table-responsive table-bordered table-hover">
                        <thead class="bg-success">
                        <tr class="cart_menu">
                            <td>Sl.</td>
                            <td>Photo</td>
                            <td>Name</td>
                            <td>Order Qty</td>
                            <td>Unit Price</td>
                            <td>Sub Total</td>
                        </tr>
                        </thead>
                        <tbody>
                        <!-- pending orders-->
                        @if(isset($orderDetails))
                            @foreach($orderDetails as $key => $order)
                                <tr>
                                    <td> {{ ++$key }} </td>
                                    <td><img src="{{ url('/uploads/products/'.$order->product_photo) }}" alt="product_photo" width="40px" height="40px"></td>
                                    <td>{{ $order->product_name }}</td>
                                    <td class="text-center">{{ $order->product_qty }}</td>
                                    <td class="text-right"> ${{ number_format($order->unit_price,2) }}</td>
                                    <td class="text-right"> ${{ number_format($order->subtotal_price,2) }}</td>
                                </tr>
                            @endforeach
                        @endif
                        <!--/. pending orders -->
                        </tbody>
                    </table>
                </div>
            </div>
    </div>
</section>
