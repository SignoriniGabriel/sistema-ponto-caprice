<x-guest-layout>

    <div class="flex justify-center items-center 2xl:container 2xl:mx-auto lg:py-16 md:py-12 py-9 px-4 md:px-6 lg:px-20 xl:px-44 mt-20">
        <div class="flex w-full sm:w-9/12 lg:w-full flex-col lg:flex-row justify-center items-center lg:space-x-10 2xl:space-x-36 space-y-12 lg:space-y-0">
            <div class="flex w-full flex-col justify-start items-start">
                <div class="">
                    <p class="text-3xl dark:text-white lg:text-4xl font-semibold leading-7 lg:leading-9 text-gray-800">Checkout</p>
                </div>
                <div class="mt-2">
                    <a href="{{route('sale.index')}}" class="text-base dark:text-gray-400 leading-4 focus:outline-none focus:underline hover:underline hover:text-gray-800 text-gray-600">Back to my bag</a>
                </div>
                <div class="mt-12">
                    <p class="text-lg dark:text-white leading-4 text-gray-800"><a href="javascript:void(0)" class="focus:outline-none dark:text-white hover:underline font-semibold focus:underline focus:underline">Payment Methods:</a></p>
                </div>
                <div class="mt-6 w-full z-0" id="paypal-button-container"></div>
            </div>
            <div class="flex flex-col justify-start items-start bg-gray-50 dark:bg-gray-800 w-full p-6 md:p-14">
                <div>
                    <h1 class="text-2xl  dark:text-white dark:text-white font-semibold leading-6 text-gray-800">Order Summary</h1>
                </div>
                @foreach($sales_opened as $cart)
                    <input id="total" class="hidden" name="total" value="{{$cart->total}}" disabled/>
{{--                    @foreach($cart->product_sale as $item)--}}
                    <div class="flex mt-7 flex-col items-end w-full space-y-6">
                        <div class="flex justify-between w-full items-center">
                            <p class="text-lg dark:text-gray-300 leading-4 text-gray-600">Total items</p>
                            <p class="text-lg dark:text-gray-300 font-semibold leading-4 text-gray-600">2</p>
                        </div>
                        <div class="flex justify-between w-full items-center">
                            <p class="text-lg dark:text-gray-300 leading-4 text-gray-600">Total Charges</p>
                            <p class="text-lg dark:text-gray-300 font-semibold leading-4 text-gray-600">R$ 0,00</p>
                        </div>
{{--                        <div class="flex justify-between w-full items-center">--}}
{{--                            <p class="text-lg dark:text-gray-300 leading-4 text-gray-600">Shipping charges</p>--}}
{{--                            <p class="text-lg dark:text-gray-300 font-semibold leading-4 text-gray-600">$90</p>--}}
{{--                        </div>--}}
                        <div class="flex justify-between w-full items-center">
                            <p class="text-lg dark:text-gray-300 leading-4 text-gray-600">Sub total</p>
                            <p class="text-lg dark:text-gray-300 font-semibold leading-4 text-gray-600">R${{number_format($cart->total,2,",",".")}}</p>
                        </div>
                    </div>
                    <div class="flex justify-between w-full items-center mt-20">
                        <p class="text-xl dark:text-white font-semibold leading-4 text-gray-800">Estimated Total</p>
                        <p class="text-lg dark:text-white font-semibold leading-4 text-gray-800">R${{number_format($cart->total,2,",",".")}}</p>
                    </div>
{{--                    @endforeach--}}
                @endforeach
                <a class="w-full" href="{{route('sale.finish')}}"><button class="focus:outline-none focus:ring-2 dark:bg-gray-800 dark:text-white focus:ring-gray-500 focus:ring-offset-2 mt-8 text-base font-medium focus:ring-2 focus:ring-ocus:ring-gray-800 leading-4 hover:bg-black py-4 w-full md:w-4/12 lg:w-full text-white bg-gray-800">Finish</button></a>
            </div>
        </div>
    </div>

    <!-- Include the PayPal JavaScript SDK; replace "test" with your own sandbox Business account app client ID -->
    <script src="https://www.paypal.com/sdk/js?client-id={{env('PAYPAL_CLIENT_ID')}}&currency=BRL"></script>

    <script>
        paypal.Buttons({
            // Sets up the transaction when a payment button is clicked
            createOrder: function (data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: document.getElementById('total').value// Can reference variables or functions. Example: `value: document.getElementById('...').value`
                        }
                    }]
                });
            },

            // Finalize the transaction after payer approval
            onApprove: function (data, actions) {
                return actions.order.capture().then(function (orderData) {
                    // Successful capture! For dev/demo purposes:
                    console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                    var transaction = orderData.purchase_units[0].payments.captures[0];
                    alert('Transaction ' + transaction.status + ': ' + transaction.id + '\n\nSee console for all available details');

                    // When ready to go live, remove the alert and show a success message within this page. For example:
                    // var element = document.getElementById('paypal-button-container');
                    // element.innerHTML = '';
                    // element.innerHTML = '<h3>Thank you for your payment!</h3>';
                    // Or go to another URL:  actions.redirect('thank_you.html');
                });
            }
        }).render('#paypal-button-container');
    </script>
</x-guest-layout>


