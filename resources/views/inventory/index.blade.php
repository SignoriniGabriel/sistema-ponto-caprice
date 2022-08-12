{{--<x-app-layout>--}}
{{--    <x-slot name="header">--}}
{{--        <h2 class="font-semibold text-xl text-gray-800 leading-tight">--}}
{{--            {{ __('Inventory') }}--}}
{{--        </h2>--}}
{{--    </x-slot>--}}

{{--    <div class="py-12">--}}
{{--        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
{{--            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">--}}
{{--                <div class="p-6 bg-white border-b border-gray-200">--}}

{{--                    @if (session('sucesso'))--}}
{{--                        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4" role="alert">--}}
{{--                            <p class="font-bold">Resposta</p>--}}
{{--                            <p>{{ session('sucesso') }}</p>--}}
{{--                        </div>--}}
{{--                    @endif--}}

{{--                    @if (session('erro'))--}}
{{--                            <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4" role="alert">--}}
{{--                                <p class="font-bold">Resposta</p>--}}
{{--                                <p>{{ session('erro') }}</p>--}}
{{--                            </div>--}}
{{--                    @endif--}}

{{--                    <div class="flex items-center mt-4 mb-10">--}}
{{--                        <a class="px-5 py-2 border-green-500 border text-green-500 rounded transition duration-300 hover:bg-green-700 hover:text-white focus:outline-none" href="{{ route('inventories.create')}}" >Novo Estoque</a>--}}
{{--                    </div>--}}
{{--                    <div class="align-middle inline-block min-w-full shadow overflow-hidden bg-white shadow-dashboard px-8 pt-3 rounded-bl-lg rounded-br-lg">--}}
{{--                        <table class="min-w-full">--}}
{{--                            <caption>--}}
{{--                                {{ $inventories->links() }}--}}
{{--                            </caption>--}}
{{--                        <thead>--}}
{{--                        <tr>--}}
{{--                            <th class="px-6 py-3 text-center text-lg leading-4 text-black-500 tracking-wider" colspan="3">--}}
{{--                                Lista de estoque--}}
{{--                            </th>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-lg leading-4 text-black-500 tracking-wider">Produto</th>--}}
{{--                            <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-lg leading-4 text-black-500 tracking-wider">Quantidade</th>--}}
{{--                            <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-lg leading-4 text-black-500 tracking-wider">Lote</th>--}}
{{--                            <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-lg leading-4 text-black-500 tracking-wider">Data</th>--}}
{{--                            <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-lg leading-4 text-black-500 tracking-wider"></th>--}}
{{--                        </tr>--}}
{{--                        </thead>--}}

{{--                        <tbody>--}}
{{--                        @foreach($inventories as $inventory)--}}
{{--                            <tr>--}}
{{--                                <td class="px-6 py-4 whitespace-no-wrap border-b text-gray-900 border-gray-500 text-sm leading-5">{{$inventory->name}}</td>--}}
{{--                                <td class="px-6 py-4 whitespace-no-wrap border-b text-gray-900 border-gray-500 text-sm leading-5">{{$inventory->amount}}</td>--}}
{{--                                <td class="px-6 py-4 whitespace-no-wrap border-b text-gray-900 border-gray-500 text-sm leading-5">{{$inventory->id}}</td>--}}
{{--                                <td class="px-6 py-4 whitespace-no-wrap border-b text-gray-900 border-gray-500 text-sm leading-5">{{$inventory->updated_at}}</td>--}}
{{--                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm leading-5 text-right ">--}}
{{--                                    <a class="px-5 py-2 border-red-900 border text-red-900 rounded transition duration-300 hover:bg-red-900 hover:text-white focus:outline-none" href="{{ route('inventories.edit', $inventory->id)}}" >Alterar</a>--}}
{{--                                    <a class="px-5 py-2 border-yellow-500 border text-yellow-500 rounded transition duration-300 hover:bg-yellow-700 hover:text-white focus:outline-none" href="{{ route('inventories.show', $inventory->id)}}" >Visualizar</a>--}}
{{--                                    <form action="{{ route('inventories.destroy', $inventory->id)}}" method="post" style="display: inline-block">--}}
{{--                                        @csrf--}}
{{--                                        @method('DELETE')--}}
{{--                                        <button class="px-5 py-2 border-red-500 border text-red-500 rounded transition duration-300 hover:bg-red-700 hover:text-white focus:outline-none" type="submit">Excluir</button>--}}
{{--                                    </form>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                        @endforeach--}}
{{--                        </tbody>--}}
{{--                    </table>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{-- </div>--}}
{{--</x-app-layout>--}}


<x-admin-layout>

    <!-- component -->
    <div class="container mx-auto px-4 sm:px-8">
        <div class="py-8">

            @if (session('sucesso'))
                <div class="h-32" id="margem">
                    <div class="flex">
                        <!--code for notification starts-->
                        <div role="alert" class="sm:mr-6 xl:w-5/12 mx-auto absolute left-0 sm:left-auto right-40 sm:w-6/12 md:w-3/5 justify-between w-11/12 bg-white dark:bg-gray-800 shadow-lg rounded flex sm:flex-row flex-col transition duration-150 ease-in-out" id="notification">
                            <div class="sm:px-6 p-2 flex mt-4 sm:mt-0 ml-4 sm:ml-0 items-center justify-center bg-green-700 sm:rounded-tl sm:rounded-bl w-12 h-12 sm:h-auto sm:w-auto text-white">
                                <svg aria-label="success logo" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="40" height="40" fill="currentColor">
                                    <path class="heroicon-ui" d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-2.3-8.7l1.3 1.29 3.3-3.3a1 1 0 0 1 1.4 1.42l-4 4a1 1 0 0 1-1.4 0l-2-2a1 1 0 0 1 1.4-1.42z" />
                                </svg>
                            </div>
                            <div class="flex flex-col justify-center xl:-ml-4 pl-4 xl:pl-1 sm:w-3/5 pt-4 sm:pb-4 pb-2">
                                <h1 class="text-lg text-gray-800 dark:text-gray-100 font-semibold pb-1">Action Completed</h1>
                                <p class="text-sm text-gray-600 dark:text-gray-400 font-normal">You have successfully completed the action!</p>
                            </div>
                            <div class="flex sm:flex-col sm:justify-center sm:border-l dark:border-gray-700 items-center border-gray-300 sm:w-1/6 pl-4 sm:pl-0">
                                <a href="javascript:void(0)" onclick="closeModal()" class="sm:pt-4 pb-4 sm:w-full flex sm:justify-center">
                                    <span class="text-lg text-green-700 font-semibold mr-4 sm:mr-0 cursor-pointer hover:text-green-800">Dismiss</span>
                                </a>
                            </div>
                        </div>
                        <!--code for notification ends-->
                    </div>
                </div>
            @endif

            @if (session('erro'))
                    <div class="h-32" id="margem">
                        <div class="flex">
                            <!--code for notification starts-->
                            <div role="alert" class="sm:mr-6 xl:w-5/12 mx-auto absolute left-0 sm:left-auto right-40 sm:w-6/12 md:w-3/5 justify-between w-11/12 bg-white dark:bg-gray-800 shadow-lg rounded flex sm:flex-row flex-col transition duration-150 ease-in-out" id="notification">
                                <div class="sm:px-6 p-2 flex mt-4 sm:mt-0 ml-4 sm:ml-0 items-center justify-center bg-red-700 sm:rounded-tl sm:rounded-bl w-12 h-12 sm:h-auto sm:w-auto text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <div class="flex flex-col justify-center xl:-ml-4 pl-4 xl:pl-1 sm:w-3/5 pt-4 sm:pb-4 pb-2">
                                    <h1 class="text-lg text-gray-800 dark:text-gray-100 font-semibold pb-1">Action Imcompleted</h1>
                                    <p class="text-sm text-gray-600 dark:text-gray-400 font-normal">Unable to complete the requested action!</p>
                                </div>
                                <div class="flex sm:flex-col sm:justify-center sm:border-l dark:border-gray-700 items-center border-gray-300 sm:w-1/6 pl-4 sm:pl-0">
                                    <a href="javascript:void(0)" onclick="closeModal()" class="sm:pt-4 pb-4 sm:w-full flex sm:justify-center">
                                        <span class="text-lg text-red-700 font-semibold mr-4 sm:mr-0 cursor-pointer hover:text-red-800">Dismiss</span>
                                    </a>
                                </div>
                            </div>
                            <!--code for notification ends-->
                        </div>
                    </div>
            @endif

            <div>
                <h2 class="text-2xl font-semibold leading-tight dark:text-gray-300">{{ __('Inventory') }}</h2>
            </div>
            <form action="{{route('inventory.search')}}" method="get">
                <div class="my-2 flex sm:flex-row flex-col justify-between ">
                    <div class="inline-flex shadow rounded">
                        <div class="flex flex-row mb-1 sm:mb-0 ">
                            <div class="relative">
                                <select
                                    class="appearance-none h-full rounded-l border border-gray-200 dark:border-gray-700 block appearance-none w-full bg-white dark:bg-gray-800 text-gray-500 py-2 px-4 pr-8 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                    <option>5</option>
{{--                                    <option>10</option>--}}
{{--                                    <option>20</option>--}}
                                </select>
                                <div
                                    class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-500">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 20 20"></svg>
                                </div>
                            </div>
                            <div class="relative">
                                <select name="filter"
                                        class="appearance-none h-full rounded-r border-t sm:rounded-r-none sm:border-r-0 border-r border-b block appearance-none w-full bg-white dark:bg-gray-800 border-gray-200 dark:border-gray-700 text-gray-500 py-2 px-4 pr-8 leading-tight focus:outline-none focus:border-l focus:border-r focus:bg-white focus:border-gray-200">
                                    <option value="name">Name</option>
{{--                                    <option value="category">Category</option>--}}
                                </select>
                                <div
                                    class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 20 20"></svg>
                                </div>
                            </div>
                        </div>
                        <div class="block relative">
                        <span class="h-full absolute inset-y-0 left-0 flex items-center pl-2">
                            <svg viewBox="0 0 24 24" class="h-4 w-4 fill-current text-gray-500">
                                <path
                                    d="M10 4a6 6 0 100 12 6 6 0 000-12zm-8 6a8 8 0 1114.32 4.906l5.387 5.387a1 1 0 01-1.414 1.414l-5.387-5.387A8 8 0 012 10z">
                                </path>
                            </svg>
                        </span>
                            <input name="search" placeholder="Search"
                                   class=" appearance-none rounded-r rounded-l sm:rounded-l-none border border-gray-200 dark:border-gray-700 border-b block pl-8 pr-6 py-2 w-full bg-white dark:bg-gray-800 text-sm placeholder-gray-400 text-gray-400 focus:bg-white focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none"/>
                        </div>
                    </div>
                    <div class="flex flex-row">
                        <button
                            class="px-4 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-purple-600 rounded-md hover:bg-purple-700 focus:outline-none focus:ring focus:ring-indigo-300">
                            <a href="{{ route('inventories.create')}}">New Inventory</a>
                        </button>
                    </div>
                </div>
            </form>
            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                    <table class="min-w-full leading-normal">
                        <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-5 py-3 border-b-2 border-gray-200 dark:border-gray-500">{{__('Product')}}</th>
                            <th class="px-5 py-3 border-b-2 border-gray-200 dark:border-gray-500">{{__('Amount')}}</th>
                            <th class="px-5 py-3 border-b-2 border-gray-200 dark:border-gray-500">{{__('Update')}}</th>
                            <th class="px-5 py-3 border-b-2 border-gray-200 dark:border-gray-500">{{__('Options')}}</th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-50 dark:divide-gray-700 dark:bg-gray-800">
                        @if(!$inventories->isEmpty())
                            @foreach($inventories as $inventory)

                                <tr class="text-gray-700 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700 transition">
                                    <td class="px-4 py-5">
                                        <a href="{{ route('inventories.show', $inventory->id)}}">
                                            <div class="flex items-center text-sm">
                                                <!-- Avatar with inset shadow -->
{{--                                                <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">--}}
{{--                                                    <img class="object-cover w-full h-full rounded-full"--}}
{{--                                                         src="{{url('storage/products/'.$product->image)}}" alt=""--}}
{{--                                                         loading="lazy"/>--}}
{{--                                                    <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>--}}
{{--                                                </div>--}}
                                                <div>
                                                    <p class="font-semibold hover:text-gray-900 dark:hover:text-gray-200">{{$inventory->name}}</p>
                                                    <p class="text-xs text-gray-600 hover:text-gray-900 dark:text-gray-400">SKU: {{$inventory->product_id}}</p>
                                                </div>
                                            </div>
                                        </a>
                                    </td>
                                    <td class="px-4 py-3 text-sm">{{$inventory->amount}}</td>
                                    <td class="px-4 py-3 text-sm">{{date_format(date_create($inventory->updated_at), 'd/m/Y')}}</td>
                                    <td class="px-4 py-3">
                                        <div class="flex items-center space-x-4 text-sm">
                                            <button
                                                class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                                aria-label="Edit">
                                                <a href="{{ route('inventories.edit', $inventory->id)}}">
                                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                         viewBox="0 0 20 20">
                                                        <path
                                                            d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                                                    </svg>
                                                </a>
                                            </button>
                                                <button @click="openModal" onclick="mostrarDados({{$inventory->id}})" class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" type="submit" aria-label="Delete">
                                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd"
                                                              d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                              clip-rule="evenodd"></path>
                                                    </svg>
                                                </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>

                    </table>

                    <div class="px-5 py-5 bg-white dark:bg-gray-800 border-t flex flex-col xs:flex-row items-center xs:justify-between">
                        <caption>
                            {{ $inventories->appends(['filter' => isset($filter) ? $filter : '', 'search' => isset($search) ? $search : ''])->links() }}
                        </caption>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                    Are you sure you want to permanently delete the current stock?
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
                        Delete inventory
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- End of modal backdrop -->

    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script>
        function mostrarDados(valor){
            $("#form_delete").attr("action", "http://localhost:8000/inventories/"+valor)

        }
    </script>

</x-admin-layout>




