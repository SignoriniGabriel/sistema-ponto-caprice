<x-guest-layout>

    <div class="2xl:container 2xl:mx-auto md:py-12 lg:px-20 md:px-6 py-9 px-4 mt-8">
        <div id="viewerButton" class="hidden w-full flex justify-center">
            <button onclick="openView()" class="bg-white text-indigo-600 shadow-md rounded focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 py-5 px-10 font-semibold">Open Quick View</button>
        </div>
        <div id="viewerBox" class="lg:p-10 md:p-6 p-4 bg-white dark:bg-gray-900">
            <div class="mt-3 md:mt-4 lg:mt-0 flex flex-col lg:flex-row items-strech justify-center bg-gray-50 lg:space-x-8">
{{--                <div class="lg:w-1/2 flex justify-between items-strech bg-gray-50  px-2 py-20 md:py-6 md:px-6 lg:py-24">--}}
{{--                    <div class="flex items-center">--}}
{{--                        <button onclick="goPrev()" aria-label="slide back" class="focus:outline-none focus:ring-2 focus:ring-gray-800 hover:bg-gray-100">--}}
{{--                            <svg class="w-10 h-10 lg:w-16 lg:h-16" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                <path d="M40 16L24 32L40 48" stroke="#1F2937" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />--}}
{{--                            </svg>--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                    <div class="slider">--}}
{{--                        <div class="slide-ana lg:relative">--}}
{{--                            <div class="flex" style="transform: translateX(-100%)">--}}
{{--                                <img src="https://i.ibb.co/fMGD6ZC/eugene-chystiakov-3ne-Swyntb-Q8-unsplash-1-removebg-preview-3-1.png" alt="A black chair with wooden legs" class="w-full h-full" />--}}
{{--                            </div>--}}
{{--                            <div class="flex" style="transform: translateX(0%)">--}}
{{--                                <img src="https://i.ibb.co/fMGD6ZC/eugene-chystiakov-3ne-Swyntb-Q8-unsplash-1-removebg-preview-3-1.png" alt="A black chair with wooden legs" class="w-full h-full" />--}}
{{--                            </div>--}}
{{--                            <div class="flex" style="transform: translateX(100%)">--}}
{{--                                <img src="https://i.ibb.co/fMGD6ZC/eugene-chystiakov-3ne-Swyntb-Q8-unsplash-1-removebg-preview-3-1.png" alt="A black chair with wooden legs" class="w-full h-full" />--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="flex items-center">--}}
{{--                        <button onclick="goNext()" aria-label="slide forward" class="focus:outline-none focus:ring-2 focus:ring-gray-800 hover:bg-gray-100">--}}
{{--                            <svg class="w-10 h-10 lg:w-16 lg:h-16" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                <path d="M24 16L40 32L24 48" stroke="#1F2937" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />--}}
{{--                            </svg>--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="lg:w-1/2 flex justify-between items-strech px-2 py-20 md:py-6 md:px-6 lg:py-24">
                    <img src="{{url('storage/products/'.$product->image)}}" alt="product" class="" />
                </div>
                <div class="lg:w-1/2 flex flex-col justify-center mt-7 md:mt-8 lg:mt-0 pb-8 lg:pb-0">
                    <small class="uppercase">Ponto Caprice Atelier</small>
                    <div class="flex justify-between">
                        <h1 class="text-3xl lg:text-4xl font-semibold text-gray-800 dark:text-white">{{$product->name}}</h1>
                        <small class="uppercase mr-12 mt-4 text-black">{{$product->category->name}} <a class="uppercase ml-6">SKU:{{$product->id}}</a></small>
                    </div>
                    <p class="text-base leading-normal text-gray-600 dark:text-white mt-2 pr-2">{{$product->description}}</p>
                    <p class="text-3xl font-medium text-gray-600 dark:text-white mt-8 md:mt-10">R${{number_format($product->price,2,",",".")}}</p>


                    <div class="flex items-center flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-6 lg:space-x-8 mt-8 md:mt-16">
                        <button class="w-full md:w-3/5 border border-gray-800 text-base font-medium leading-none text-white uppercase py-6 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 bg-gray-800 hover:bg-gray-700 transition-2 text-white dark:bg-white dark:text-gray-900 dark:hover:bg-gray-200"><a href="{{ route('sale.add', $product->id)}}">Add to Cart</a></button>
                    </div>
{{--                    <div class="mt-6">--}}
{{--                        <button class="text-xl underline text-gray-800 dark:text-white dark:hover:text-gray-200 capitalize hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800">add to wishlist</button>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>

</x-guest-layout>
