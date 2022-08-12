<x-guest-layout>
{{--    <div x-data="{ cartOpen: false , isOpen: false }" class="bg-white">--}}
{{--    <!-- Ícone do Carrinho Lateral -->--}}
{{--    <div class="flex items-center justify-end w-full">--}}
{{--        <button @click="cartOpen = !cartOpen" class="text-gray-600 focus:outline-none mx-4 sm:mx-0">--}}
{{--            <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>--}}
{{--            </svg>--}}
{{--        </button>--}}

{{--        <div class="flex sm:hidden">--}}
{{--            <button @click="isOpen = !isOpen" type="button" class="text-gray-600 hover:text-gray-500 focus:outline-none focus:text-gray-500" aria-label="toggle menu">--}}
{{--                <svg viewBox="0 0 24 24" class="h-6 w-6 fill-current">--}}
{{--                    <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>--}}
{{--                </svg>--}}
{{--            </button>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    @if($sales_opened->isEmpty())--}}
{{--        <tr>--}}
{{--            <td class="px-6 py-3 border-b-2 border-gray-300 text-center text-lg leading-4 text-black-500--}}
{{--                                                tracking-wider" colspan="6">{{__('You haven\'t added any products!')}}</td>--}}
{{--        </tr>--}}
{{--        </tbody>--}}
{{--    @else--}}
{{--        @foreach($sales_opened as $cart)--}}
{{--            @foreach($cart->product_sale as $item)--}}
{{--            <!-- Carrinho Lateral -->--}}
{{--                <div :class="cartOpen ? 'translate-x-0 ease-out' : 'translate-x-full ease-in'" class="fixed right-0 top-0 col-span-1 w-full h-full px-6 py-4 transition duration-300 transform overflow-y-auto bg-white border-gray-300">--}}

{{--                    <div class="flex items-center justify-between">--}}
{{--                        <h3 class="text-2xl font-medium text-gray-700">Your cart</h3>--}}
{{--                        <button @click="cartOpen = !cartOpen" class="text-gray-600 focus:outline-none">--}}
{{--                            <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M6 18L18 6M6 6l12 12"></path></svg>--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                    <hr class="my-3">--}}
{{--                    <div class="flex justify-between mt-6">--}}
{{--                        <div class="flex">--}}
{{--                            <img alt="Produto" class="h-20 w-20 object-cover rounded" src="{{url('storage/products/'.$item->product->image)}}">--}}
{{--                            <div class="mx-3">--}}
{{--                                <h3 class="text-sm text-gray-600">{{$item->product->name}}</h3>--}}
{{--                                <div class="flex items-center mt-2">--}}
{{--                                    <button class="text-gray-500 focus:outline-none focus:text-gray-600">--}}
{{--                                        <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>--}}
{{--                                    </button>--}}
{{--                                    <span class="text-gray-700 mx-2">{{$item->quantity}}</span>--}}
{{--                                    <button class="text-gray-500 focus:outline-none focus:text-gray-600">--}}
{{--                                        <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <span class="text-gray-600">R${{number_format($item->product->price,2,",",".")}}</span>--}}
{{--                    </div>--}}
{{--                    <div class="mt-8">--}}
{{--                        <form class="flex items-center justify-center">--}}
{{--                            <input class="form-input w-48" type="text" placeholder="Add promocode">--}}
{{--                            <button class="ml-3 flex items-center px-3 py-2 bg-blue-600 text-white text-sm uppercase font-medium rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500">--}}
{{--                                <span>Apply</span>--}}
{{--                            </button>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                    <a href="{{ route('sale.checkout')}}" class="flex items-center justify-center mt-4 px-3 py-2 bg-blue-600 text-white text-sm uppercase font-medium rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500">--}}
{{--                        <span>Checkout</span>--}}
{{--                        <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            @endforeach--}}
{{--        @endforeach--}}
{{--    @endif--}}
{{--    </div>--}}


{{--    <div class="flex items-center justify-center py-8">--}}
{{--        <button onclick="checkoutHandler(false)" class="py-2 px-10 rounded bg-indigo-600 hover:bg-indigo-700 text-white">Open Modal</button>--}}
{{--    </div>--}}
{{--    <div class="w-full h-full bg-black dark:bg-gray-900 bg-opacity-90 top-0 overflow-y-auto overflow-x-hidden fixed sticky-0" id="chec-div">--}}
{{--        <div class="w-full absolute z-10 right-0 h-full overflow-x-hidden transform translate-x-0 transition ease-in-out duration-700" id="checkout">--}}
{{--            <div class="flex items-end lg:flex-row flex-col justify-end" id="cart">--}}
{{--                <div class="lg:w-1/2 md:w-8/12 w-full lg:px-8 lg:py-14 md:px-6 px-4 md:py-8 py-4 bg-white dark:bg-gray-800 overflow-y-hidden overflow-x-hidden lg:h-screen h-auto" id="scroll">--}}
{{--                    <div class="flex items-center text-gray-500 hover:text-gray-600 dark:text-white cursor-pointer" onclick="checkoutHandler(false)">--}}
{{--                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-left" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">--}}
{{--                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />--}}
{{--                            <polyline points="15 6 9 12 15 18" />--}}
{{--                        </svg>--}}
{{--                        <p class="text-sm pl-2 leading-none dark:hover:text-gray-200">Back</p>--}}
{{--                    </div>--}}
{{--                    <p class="lg:text-4xl text-3xl font-black leading-10 text-gray-800 dark:text-white pt-3">Bag</p>--}}
{{--                    <div class="md:flex items-strech py-8 md:py-10 lg:py-8 border-t border-gray-50">--}}
{{--                        <div class="md:w-4/12 2xl:w-1/4 w-full">--}}
{{--                            <img src="https://i.ibb.co/SX762kX/Rectangle-36-1.png" alt="Black Leather Bag" class="h-full object-center object-cover md:block hidden" />--}}
{{--                            <img src="https://i.ibb.co/g9xsdCM/Rectangle-37.pngg" alt="Black Leather Bag" class="md:hidden w-full h-full object-center object-cover" />--}}
{{--                        </div>--}}
{{--                        <div class="md:pl-3 md:w-8/12 2xl:w-3/4 flex flex-col justify-center">--}}
{{--                            <p class="text-xs leading-3 text-gray-800 dark:text-white md:pt-0 pt-4">RF293</p>--}}
{{--                            <div class="flex items-center justify-between w-full pt-1">--}}
{{--                                <p class="text-base font-black leading-none text-gray-800 dark:text-white">North wolf bag</p>--}}
{{--                                <select aria-label="Select quantity" class="py-2 px-1 border border-gray-200 mr-6 focus:outline-none dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-white">--}}
{{--                                    <option>01</option>--}}
{{--                                    <option>02</option>--}}
{{--                                    <option>03</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                            <p class="text-xs leading-3 text-gray-600 dark:text-white pt-2">Height: 10 inches</p>--}}
{{--                            <p class="text-xs leading-3 text-gray-600 dark:text-white py-4">Color: Black</p>--}}
{{--                            <p class="w-96 text-xs leading-3 text-gray-600 dark:text-white">Composition: 100% calf leather</p>--}}
{{--                            <div class="flex items-center justify-between pt-5">--}}
{{--                                <div class="flex itemms-center">--}}
{{--                                    <p class="text-xs leading-3 underline text-gray-800 dark:text-white cursor-pointer">Add to favorites</p>--}}
{{--                                    <p class="text-xs leading-3 underline text-red-500 pl-5 cursor-pointer">Remove</p>--}}
{{--                                </div>--}}
{{--                                <p class="text-base font-black leading-none text-gray-800 dark:text-white">$9,000</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="md:flex items-strech py-8 md:py-10 lg:py-8 border-t border-gray-50">--}}
{{--                        <div class="md:w-4/12 2xl:w-1/4 w-full">--}}
{{--                            <img src="https://i.ibb.co/c6KyDXN/Rectangle-5-1.png" alt="Gray Sneakers" class="h-full object-center object-cover md:block hidden" />--}}
{{--                            <img src="https://i.ibb.co/yVSpYqx/Rectangle-6.png" alt="Gray Sneakers" class="md:hidden w-full h-full object-center object-cover" />--}}
{{--                        </div>--}}
{{--                        <div class="md:pl-3 md:w-8/12 2xl:w-3/4 flex flex-col justify-center">--}}
{{--                            <p class="text-xs leading-3 text-gray-800 dark:text-white md:pt-0 pt-4">RF293</p>--}}
{{--                            <div class="flex items-center justify-between w-full pt-1">--}}
{{--                                <p class="text-base font-black leading-none text-gray-800 dark:text-white">LW sneakers</p>--}}
{{--                                <select aria-label="Select quantity" class="py-2 px-1 border border-gray-200 mr-6 focus:outline-none dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-white">--}}
{{--                                    <option>01</option>--}}
{{--                                    <option>02</option>--}}
{{--                                    <option>03</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                            <p class="text-xs leading-3 text-gray-600 dark:text-white pt-2">Height: 10 inches</p>--}}
{{--                            <p class="text-xs leading-3 text-gray-600 dark:text-white py-4">Color: Black</p>--}}
{{--                            <p class="w-96 text-xs leading-3 text-gray-600 dark:text-white">Composition: 100% calf leather</p>--}}
{{--                            <div class="flex items-center justify-between pt-5">--}}
{{--                                <div class="flex itemms-center">--}}
{{--                                    <p class="text-xs leading-3 underline text-gray-800 dark:text-white cursor-pointer">Add to favorites</p>--}}
{{--                                    <p class="text-xs leading-3 underline text-red-500 pl-5 cursor-pointer">Remove</p>--}}
{{--                                </div>--}}
{{--                                <p class="text-base font-black leading-none text-gray-800 dark:text-white">$9,000</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="md:flex items-strech py-8 md:py-10 lg:py-8 border-t border-gray-50">--}}
{{--                        <div class="md:w-4/12 2xl:w-1/4 w-full">--}}
{{--                            <img src="https://i.ibb.co/6gzWwSq/Rectangle-20-1.png" alt="Black Leather Purse" class="h-full object-center object-cover md:block hidden" />--}}
{{--                            <img src="https://i.ibb.co/TTnzMTf/Rectangle-21.png" alt="Black Leather Purse" class="md:hidden w-full h-full object-center object-cover" />--}}
{{--                        </div>--}}
{{--                        <div class="md:pl-3 md:w-8/12 2xl:w-3/4 flex flex-col justify-center">--}}
{{--                            <p class="text-xs leading-3 text-gray-800 dark:text-white md:pt-0 pt-4">RF293</p>--}}
{{--                            <div class="flex items-center justify-between w-full">--}}
{{--                                <p class="text-base font-black leading-none text-gray-800 dark:text-white">Luxe card holder</p>--}}
{{--                                <select aria-label="Select quantity" class="py-2 px-1 border border-gray-200 mr-6 focus:outline-none dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-white">--}}
{{--                                    <option>01</option>--}}
{{--                                    <option>02</option>--}}
{{--                                    <option>03</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                            <p class="text-xs leading-3 text-gray-600 dark:text-white pt-2">Height: 10 inches</p>--}}
{{--                            <p class="text-xs leading-3 text-gray-600 dark:text-white py-4">Color: Black</p>--}}
{{--                            <p class="w-96 text-xs leading-3 text-gray-600 dark:text-white">Composition: 100% calf leather</p>--}}
{{--                            <div class="flex items-center justify-between pt-5">--}}
{{--                                <div class="flex itemms-center">--}}
{{--                                    <p class="text-xs leading-3 underline text-gray-800 dark:text-white cursor-pointer">Add to favorites</p>--}}
{{--                                    <p class="text-xs leading-3 underline text-red-500 pl-5 cursor-pointer">Remove</p>--}}
{{--                                </div>--}}
{{--                                <p class="text-base font-black leading-none text-gray-800 dark:text-white">$9,000</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="lg:w-96 md:w-8/12 w-full bg-gray-100 dark:bg-gray-900 h-full">--}}
{{--                    <div class="flex flex-col lg:h-screen h-auto lg:px-8 md:px-7 px-4 lg:py-20 md:py-10 py-6 justify-between overflow-y-auto">--}}
{{--                        <div>--}}
{{--                            <p class="lg:text-4xl text-3xl font-black leading-9 text-gray-800 dark:text-white">Summary</p>--}}
{{--                            <div class="flex items-center justify-between pt-16">--}}
{{--                                <p class="text-base leading-none text-gray-800 dark:text-white">Subtotal</p>--}}
{{--                                <p class="text-base leading-none text-gray-800 dark:text-white">$9,000</p>--}}
{{--                            </div>--}}
{{--                            <div class="flex items-center justify-between pt-5">--}}
{{--                                <p class="text-base leading-none text-gray-800 dark:text-white">Shipping</p>--}}
{{--                                <p class="text-base leading-none text-gray-800 dark:text-white">$30</p>--}}
{{--                            </div>--}}
{{--                            <div class="flex items-center justify-between pt-5">--}}
{{--                                <p class="text-base leading-none text-gray-800 dark:text-white">Tax</p>--}}
{{--                                <p class="text-base leading-none text-gray-800 dark:text-white">$35</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <div class="flex items-center pb-6 justify-between lg:pt-5 pt-20">--}}
{{--                                <p class="text-2xl leading-normal text-gray-800 dark:text-white">Total</p>--}}
{{--                                <p class="text-2xl font-bold leading-normal text-right text-gray-800 dark:text-white">$10,240</p>--}}
{{--                            </div>--}}
{{--                            <button onclick="checkoutHandler1(true)" class="text-base leading-none w-full py-5 bg-gray-800 border-gray-800 border focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 text-white dark:hover:bg-gray-700">Checkout</button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <style>--}}
{{--            /* width */--}}
{{--            #scroll::-webkit-scrollbar {--}}
{{--                width: 1px;--}}
{{--            }--}}

{{--            /* Track */--}}
{{--            #scroll::-webkit-scrollbar-track {--}}
{{--                background: #f1f1f1;--}}
{{--            }--}}

{{--            /* Handle */--}}
{{--            #scroll::-webkit-scrollbar-thumb {--}}
{{--                background: rgb(133, 132, 132);--}}
{{--            }--}}
{{--        </style>--}}
{{--    </div>--}}
{{--    <script>--}}
{{--        let checkout = document.getElementById("checkout");--}}
{{--        let checdiv = document.getElementById("chec-div");--}}
{{--        let flag3 = false;--}}
{{--        const checkoutHandler = () => {--}}
{{--            if (!flag3) {--}}
{{--                checkout.classList.add("translate-x-full");--}}
{{--                checkout.classList.remove("translate-x-0");--}}
{{--                setTimeout(function () {--}}
{{--                    checdiv.classList.add("hidden");--}}
{{--                }, 1000);--}}
{{--                flag3 = true;--}}
{{--            } else {--}}
{{--                setTimeout(function () {--}}
{{--                    checkout.classList.remove("translate-x-full");--}}
{{--                    checkout.classList.add("translate-x-0");--}}
{{--                }, 1000);--}}
{{--                checdiv.classList.remove("hidden");--}}
{{--                flag3 = false;--}}
{{--            }--}}
{{--        };--}}
{{--    </script>--}}




    <div class="mt-20">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden sm:rounded-lg">

                @if (session('sucesso'))
                    <!-- Code block starts -->
                    <div class="flex items-center justify-center px-4 shadow">
                        <div role="alert" id="alert" class="transition duration-150 ease-in-out w-full lg:w-11/12 mx-auto bg-white dark:bg-gray-800 shadow rounded flex flex-col py-4 md:py-0 items-center md:flex-row justify-between">
                            <div class="flex flex-col items-center md:flex-row">
                                <div class="mr-3 p-4 bg-green-400 rounded md:rounded-tr-none md:rounded-br-none text-white">
                                    <svg tabindex="0" role="alert" aria-label="warning" class="focus:outline-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="22" height="22" fill="currentColor">
                                        <path class="heroicon-ui" d="M12 2a10 10 0 1 1 0 20 10 10 0 0 1 0-20zm0 2a8 8 0 1 0 0 16 8 8 0 0 0 0-16zm0 9a1 1 0 0 1-1-1V8a1 1 0 0 1 2 0v4a1 1 0 0 1-1 1zm0 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                                    </svg>
                                </div>
                                <p class="mr-2 text-base font-bold text-gray-800 dark:text-gray-100 mt-2 md:my-0">Success</p>
                                <div class="h-1 w-1 bg-gray-300 dark:bg-gray-700 rounded-full mr-2 hidden xl:block"></div>
                                <p class="text-sm lg:text-base dark:text-gray-400 text-gray-600 lg:pt-1 xl:pt-0 sm:mb-0 mb-2 text-center sm:text-left">{{ session('sucesso') }}</p>
                            </div>
                            <div class="flex xl:items-center lg:items-center sm:justify-end justify-center pr-4">
{{--                                <button class="focus:outline-none focus:text-indigo-400 hover:text-indigo-400 text-sm mr-4 font-bold cursor-pointer text-indigo-700 dark:text-indigo-600">Details</button>--}}
                                <button class="focus:outline-none focus:text-green-400 hover:text-green-400 text-sm mr-4 font-bold cursor-pointer text-green-700 dark:text-green-600" onclick="closeAlert()">Dismiss</button>
                            </div>
                        </div>
                    </div>
                    <!-- Code block ends -->

                @endif

                @if (session('erro'))
                        <!-- Code block starts -->
                        <div class="flex items-center justify-center px-4 shadow">
                            <div role="alert" id="alert" class="transition duration-150 ease-in-out w-full lg:w-11/12 mx-auto bg-white dark:bg-gray-800 shadow rounded flex flex-col py-4 md:py-0 items-center md:flex-row justify-between">
                                <div class="flex flex-col items-center md:flex-row">
                                    <div class="mr-3 p-4 bg-red-400 rounded md:rounded-tr-none md:rounded-br-none text-white">
                                        <svg tabindex="0" role="alert" aria-label="warning" class="focus:outline-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="22" height="22" fill="currentColor">
                                            <path class="heroicon-ui" d="M12 2a10 10 0 1 1 0 20 10 10 0 0 1 0-20zm0 2a8 8 0 1 0 0 16 8 8 0 0 0 0-16zm0 9a1 1 0 0 1-1-1V8a1 1 0 0 1 2 0v4a1 1 0 0 1-1 1zm0 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                                        </svg>
                                    </div>
                                    <p class="mr-2 text-base font-bold text-gray-800 dark:text-gray-100 mt-2 md:my-0">Error</p>
                                    <div class="h-1 w-1 bg-gray-300 dark:bg-gray-700 rounded-full mr-2 hidden xl:block"></div>
                                    <p class="text-sm lg:text-base dark:text-gray-400 text-gray-600 lg:pt-1 xl:pt-0 sm:mb-0 mb-2 text-center sm:text-left">{{ session('erro') }}</p>
                                </div>
                                <div class="flex xl:items-center lg:items-center sm:justify-end justify-center pr-4">
                                    {{--                                <button class="focus:outline-none focus:text-indigo-400 hover:text-indigo-400 text-sm mr-4 font-bold cursor-pointer text-indigo-700 dark:text-indigo-600">Details</button>--}}
                                    <button class="focus:outline-none focus:text-red-400 hover:text-red-400 text-sm mr-4 font-bold cursor-pointer text-red-700 dark:text-red-600" onclick="closeAlert()">Dismiss</button>
                                </div>
                            </div>
                        </div>
                        <!-- Code block ends -->
                @endif

                <div class="p-6 bg-white border-b border-gray-200">
                        @if($sales_opened->isEmpty())
                                <div class="px-6 py-3 border-b-2 border-gray-300 text-center text-lg leading-4 text-black-500
                                                tracking-wider" colspan="6">{{__('You haven\'t added any products!')}}</div>

                        @else
                            @foreach($sales_opened as $cart)
                            <div class="flex justify-start item-start space-y-2 flex-col">
                                <h1 class="text-2xl dark:text-white lg:text-4xl font-semibold leading-7 lg:leading-9 text-gray-800">Order</h1>
                                <p class="text-base dark:text-gray-300 font-medium leading-6 text-gray-600">{{date_format(date_create($cart->created_at), 'd/m/Y')}}</p>
                            </div>
                            <div class="mt-10 flex flex-col xl:flex-row jusitfy-center items-stretch w-full xl:space-x-8 space-y-4 md:space-y-6 xl:space-y-0">
                                <div class="flex flex-col justify-start items-start w-full space-y-4 md:space-y-6 xl:space-y-8">
                                    <div class="flex flex-col justify-start items-start dark:bg-gray-800 bg-gray-50 px-4 py-4 md:py-6 md:p-6 xl:p-8 w-full">
                                        <p class="text-lg md:text-xl dark:text-white font-semibold leading-6 xl:leading-5 text-gray-800">Customer’s Cart</p>
                                        @foreach($cart->product_sale as $item)
                                        <div class="mt-4 md:mt-6 flex flex-col md:flex-row justify-start items-start md:items-center md:space-x-6 xl:space-x-8 w-full">
                                            <div class=" w-full md:w-40">
                                                <img class="w-full hidden md:block" src="{{url('storage/products/'.$item->product->image)}}" alt="dress" />
                                            </div>
                                            <div class="border-b border-gray-200 md:flex-row flex-col flex justify-between items-start w-full pb-8 space-y-4 md:space-y-0">
                                                <div class="w-full flex flex-col justify-start items-start space-y-8">
                                                    <h3 class="text-xl dark:text-white xl:text-2xl font-semibold leading-6 text-gray-800">{{$item->product->name}}</h3>
                                                    <div class="flex justify-start items-start flex-col space-y-2">
                                                        <p class="text-sm dark:text-white leading-none text-gray-800"><span class="dark:text-gray-400 text-gray-300">Category: </span> {{$item->product->category->name}}</p>
                                                        <p class="text-sm dark:text-white leading-none text-gray-800"><span class="dark:text-gray-400 text-gray-300">Product SKU: </span> {{$item->product->id}}</p>
                                                    </div>
                                                </div>
                                                <div class="flex justify-between space-x-8 items-start w-full">
                                                    <p class="text-base dark:text-white xl:text-lg leading-6">R${{number_format($item->product->price,2,",",".")}}</p>
                                                    <p class="text-base dark:text-white xl:text-lg leading-6 text-gray-800">
{{--                                                        <a href="{{route('sale.remove', $item->id)}}">remover</a>{{$item->quantity}}--}}
{{--                                                        <a href="{{route('sale.add', $item->product->id)}}">adicionar</a>--}}
                                                    <ul class="flex">
                                                        <li class="flex flex-col justify-center">
                                                            <a href="{{route('sale.remove', $item->id)}}" role="button" aria-label="subtract"
                                                                    class="hover:bg-gray-200 hover:text-indigo-700 cursor-pointer flex rounded text-base leading-tight font-bold text-gray-500 p-1 shadow focus:outline-none">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                     height="16" viewBox="0 0 24 24" stroke-width="1.5"
                                                                     stroke="currentColor" fill="none"
                                                                     stroke-linecap="round" stroke-linejoin="round">
                                                                    <path stroke="none" d="M0 0h24v24H0z"/>
                                                                    <line x1="5" y1="12" x2="19" y2="12"/>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <input class="w-6 h-6 px-2 rounded text-indigo-700 text-base mx-2 shadow focus:outline-none placeholder-white" value="{{$item->quantity}}"  />
                                                        </li>
                                                        <li class="flex flex-col justify-center">
                                                            <a href="{{route('sale.add', $item->product->id)}}" role="button" aria-label="add"
                                                                    class="hover:bg-gray-200 hover:text-indigo-700 cursor-pointer flex rounded text-base leading-tight font-bold text-gray-500 p-1 shadow focus:outline-none">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                     height="16" viewBox="0 0 24 24" stroke-width="1.5"
                                                                     stroke="currentColor" fill="none"
                                                                     stroke-linecap="round" stroke-linejoin="round">
                                                                    <path stroke="none" d="M0 0h24v24H0z"/>
                                                                    <line x1="12" y1="5" x2="12" y2="19"/>
                                                                    <line x1="5" y1="12" x2="19" y2="12"/>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    </p>


                                                    <p class="text-base dark:text-white xl:text-lg font-semibold leading-6 text-gray-800">R${{number_format($item->total,2,",",".")}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="flex justify-center flex-col md:flex-row flex-col items-stretch w-full space-y-4 md:space-y-0 md:space-x-6 xl:space-x-8">
                                        <div class="flex flex-col px-4 py-6 md:p-6 xl:p-8 w-full bg-gray-50 dark:bg-gray-800 space-y-6">
                                            <h3 class="text-xl dark:text-white font-semibold leading-5 text-gray-800">Summary</h3>
                                            <div class="flex justify-center items-center w-full space-y-4 flex-col border-gray-200 border-b pb-4">
                                                <div class="flex justify-between w-full">
                                                    <p class="text-base dark:text-white leading-4 text-gray-800">Subtotal</p>
                                                    <p class="text-base dark:text-gray-300 leading-4 text-gray-600">R${{number_format($cart->total,2,",",".")}}</p>
                                                </div>
{{--                                                <div class="flex justify-between items-center w-full">--}}
{{--                                                    <p class="text-base dark:text-white leading-4 text-gray-800">Discount <span class="bg-gray-200 p-1 text-xs font-medium dark:bg-white dark:text-gray-800 leading-3 text-gray-800">STUDENT</span></p>--}}
{{--                                                    <p class="text-base dark:text-gray-300 leading-4 text-gray-600">-$28.00 (50%)</p>--}}
{{--                                                </div>--}}
{{--                                                <div class="flex justify-between items-center w-full">--}}
{{--                                                    <p class="text-base dark:text-white leading-4 text-gray-800">Shipping</p>--}}
{{--                                                    <p class="text-base dark:text-gray-300 leading-4 text-gray-600">$8.00</p>--}}
{{--                                                </div>--}}
                                            </div>
                                            <div class="flex justify-between items-center w-full">
                                                <p class="text-base dark:text-white font-semibold leading-4 text-gray-800">Total</p>
                                                <p class="text-base dark:text-gray-300 font-semibold leading-4 text-gray-600">R${{number_format($cart->total,2,",",".")}}</p>
                                            </div>
                                        </div>
                                        <div class="flex flex-col justify-center px-4 py-6 md:p-6 xl:p-8 w-3/6 bg-gray-50 dark:bg-gray-800 space-y-6">
                                            <h3 class="text-xl dark:text-white font-semibold leading-5 text-gray-800">Payment</h3>

                                            <div class="w-full flex justify-center items-center">
                                                <a class="hover:bg-black text-center dark:bg-white dark:text-gray-800 dark:hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 py-5 w-96 md:w-full bg-gray-800 text-base font-medium leading-4 text-white"
                                                   href="{{ route('sale.checkout')}}">
                                                    Checkout
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @endforeach
                        @endif

                    <div class="py-14 2xl:container 2xl:mx-auto">
                        <div class="">
                            <div class="flex flex-col xl:flex-row justify-center items-center space-y-10 xl:space-y-0 xl:space-x-8">
                                <div class="flex justify-center flex-col items-start w-full xl:w-full">
                                    <h3 class="text-3xl xl:text-4xl dark:text-white font-semibold leading-7 xl:leading-9 w-full md:text-left text-gray-800">Purchase History</h3>
                                    @if($sales_closed->isEmpty())
                                        <tr>
                                            <td class="px-6 py-3 border-b-2 border-gray-300 text-center text-lg leading-4 text-black-500
                                                tracking-wider" colspan="5">{{__('You haven\'t bought yet!')}}</td>
                                        </tr>
                                    @else
                                        @foreach($sales_closed as $sales)
                                            <p class="text-base leading-none dark:text-white mt-6 text-gray-800">{{date_format(date_create($sales->created_at), 'd/m/Y')}} <span class="font-semibold"></span></p>
                                            @foreach($sales->product_sale as $item)
                                                <div class="flex justify-center items-center w-full mt-3 flex-col space-y-4">
                                                    <div class="flex md:flex-row justify-start items-start md:items-center border border-gray-200 w-full">
                                                        <div class="-m-px w-24 md:w-24">
                                                            <img class="hidden md:block" src="{{url('storage/products/'.$item->product->image)}}" alt="" />
                                                        </div>
                                                        <div class="flex justify-start md:justify-between items-start md:items-center flex-col md:flex-row w-full p-4 md:px-8">
                                                            <div class="flex flex-col md:flex-shrink-0 justify-start items-start">
                                                                <h3 class="text-lg md:text-xl dark:text-white w-full font-semibold leading-6 md:leading-5 text-gray-800">{{$item->product->name}}</h3>
                                                                <div class="flex flex-row justify-start space-x-4 md:space-x-6 items-start mt-4">
                                                                    <p class="text-sm leading-none dark:text-gray-300 text-gray-600">Category: <span class="text-gray-800 dark:text-white">{{$item->product->category->name}}</span></p>
                                                                    <p class="text-sm leading-none dark:text-gray-300 text-gray-600">Quantity: <span class="text-gray-800 dark:text-white">{{$item->quantity}}</span></p>
                                                                </div>
                                                            </div>
                                                            <div class="flex mt-4 md:mt-0 md:justify-end items-center w-full">
                                                                <p class="text-xl dark:text-white lg:text-2xl font-semibold leading-5 lg:leading-6 text-gray-800">R${{number_format($item->total,2,",",".")}}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                                <div class="flex flex-col flex-col justify-start items-start mt-2 space-y-10 w-full mb-8">
                                                    <div class="flex flex-col w-full space-y-4 w-full">
                                                        <div class="flex justify-between items-center w-full">
                                                            <p class="text-base dark:text-white font-semibold leading-4 text-gray-800">Total</p>
                                                            <p class="text-base dark:text-gray-300 font-semibold leading-4 text-gray-600">R${{number_format($sales->total,2,",",".")}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
