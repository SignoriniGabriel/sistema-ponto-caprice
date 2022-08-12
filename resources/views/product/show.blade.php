<x-admin-layout>
{{--    <section class="text-gray-600 body-font overflow-hidden">--}}
{{--        <div class="container px-5 py-24 mx-auto">--}}
{{--            <div class="lg:w-4/5 mx-auto flex flex-wrap">--}}
{{--                <div class="lg:w-1/2 w-full lg:pr-10 lg:py-6 mb-6 lg:mb-0">--}}
{{--                    <h2 class="text-sm title-font text-gray-500 tracking-widest">Ponto Carpice Atelier</h2>--}}
{{--                    <h1 class="text-gray-900 text-3xl title-font font-medium mb-4">{{$products->name}}</h1>--}}

{{--                    <div class="flex mb-4">--}}
{{--                        <a class="flex-grow text-indigo-500 border-b-2 border-indigo-500 py-2 text-lg px-1">Products Details</a>--}}
{{--                    </div>--}}

{{--                    <p class="leading-relaxed mb-4">{{$products->description}}</p>--}}
{{--                    <div class="flex border-t border-gray-200 py-2">--}}
{{--                        <span class="text-gray-500">Category</span>--}}
{{--                        <span class="ml-auto text-gray-900">{{$products->category}}</span>--}}
{{--                    </div>--}}
{{--                    <div class="flex border-t border-gray-200 py-2">--}}
{{--                        <span class="text-gray-500">Minimum Stock</span>--}}
{{--                        <span class="ml-auto text-gray-900">{{$products->minimum_stock}}</span>--}}
{{--                    </div>--}}
{{--                    <div class="flex border-t border-b mb-6 border-gray-200 py-2">--}}
{{--                        <span class="text-gray-500">Maximum Stock</span>--}}
{{--                        <span class="ml-auto text-gray-900">{{$products->maximum_stock}}</span>--}}
{{--                    </div>--}}
{{--                    <div class="flex">--}}
{{--                        <span class="title-font font-medium text-2xl text-gray-900">{{$products->price}}</span>--}}
{{--                        <button class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Button</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="{{url('storage/products/'.$products->image)}}">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <section class="flex flex-col md:flex-row gap-10 py-10 px-5 bg-white dark:bg-gray-700 rounded-md shadow-lg w-full md:max-w-3xl mt-20 mx-auto">
        <div class="w-full text-indigo-500 flex flex-col justify-between">
            <img src="{{url('storage/products/'.$products->image)}}" alt="" />
        </div>
        <div class="text-indigo-500">
            <small class="uppercase">Ponto Caprice Atelier</small>
            <h3 class="uppercase text-black text-2xl font-medium dark:text-gray-300">{{$products->name}}</h3>
            <h3 class="text-2xl font-semibold mb-7">R${{number_format($products->price,2,",",".")}}</h3>
            <small class="text-black dark:text-gray-300">{{$products->description}}</small>
            <div class="flex py-2 mt-5">
                <small class="text-indigo-500">Stock</small>
                <small class="ml-auto text-gray-900 dark:text-gray-300">{{$products->minimum_stock}} - {{$products->maximum_stock}}</small>
            </div>
            <div class="flex py-2">
                <small class="text-indigo-500">Category</small>
                <small class="ml-auto text-gray-900 dark:text-gray-300">{{$products->category->name}}</small>
            </div>
            <div class="flex py-2">
                <small class="text-indigo-500">Product SKU</small>
                <small class="ml-auto text-gray-900 dark:text-gray-300">{{$products->id}}</small>
            </div>
            <div class="flex py-2">
                <small class="text-indigo-500">Creation Date</small>
                <small class="ml-auto text-gray-900 dark:text-gray-300">{{date_format(date_create($products->created_at), 'd/m/Y')}}</small>
            </div>
            <div class="flex gap-0.5 mt-4 align-bottom">
                <button id="addToCartButton" class="bg-indigo-600 hover:bg-indigo-500 focus:outline-none transition text-white uppercase px-16 py-3"><a href="{{route('products.edit', $products->id)}}">update</a></button>
                <button @click="openModal" onclick="mostrarDados({{$products->id}})" class="bg-indigo-600 hover:bg-indigo-500 focus:outline-none transition text-white uppercase p-3" aria-label="Delete">
                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                             viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
        </div>
    </section>

    <!-- Modal backdrop. This what you want to place close to the closing body tag -->
    <div
        x-show="isModalOpen"
        x-transition:enter="transition ease-out duration-150"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-30 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center">
        <!-- Modal -->
        <div
            x-show="isModalOpen"
            x-transition:enter="transition ease-out duration-150"
            x-transition:enter-start="opacity-0 transform translate-y-1/2"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0  transform translate-y-1/2"
            @click.away="closeModal"
            @keydown.escape="closeModal"
            class="w-full px-6 py-4 overflow-hidden bg-white rounded-t-lg dark:bg-gray-800 sm:rounded-lg sm:m-4 sm:max-w-xl"
            role="dialog"
            id="modal">
            <!-- Remove header if you don't want a close icon. Use modal body to place modal tile. -->
            <div class="flex justify-end">
                <button
                    class="inline-flex items-center justify-center w-6 h-6 text-gray-400 transition-colors duration-150 rounded dark:hover:text-gray-200 hover: hover:text-gray-700"
                    aria-label="close"
                    @click="closeModal">
                    <svg
                        class="w-4 h-4"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        role="img"
                        aria-hidden="true">
                        <path
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"
                            fill-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <!-- Modal body -->
            <div class="mt-4 mb-6">
                <!-- Modal title -->
                <p class="mb-2 text-lg font-semibold text-gray-700 dark:text-gray-300">Delete Inventory</p>
                <!-- Modal description -->
                <p class="text-sm text-gray-700 dark:text-gray-400">
                    Are you sure you want to permanently delete the current product?
                </p>
            </div>
            <div class="flex flex-col items-center justify-end px-6 py-3 -mx-6 -mb-4 space-y-4 sm:space-y-0 sm:space-x-6 sm:flex-row bg-gray-50 dark:bg-gray-800">
                <button
                    @click="closeModal"
                    class="w-full px-5 py-3 text-sm font-medium leading-5 text-white text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 sm:px-4 sm:py-2 sm:w-auto active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray">
                    Cancel
                </button>
                <form action="" method="post" style="display: inline-block" id="form_delete">
                    @csrf
                    @method('DELETE')
                    <button
                        class="w-full px-5 py-3 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                        Delete Product
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- End of modal backdrop -->

    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script>
        function mostrarDados(valor){
            $("#form_delete").attr("action", "http://localhost:8000/products/"+valor)

        }
    </script>

</x-admin-layout>
