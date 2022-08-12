{{--<x-app-layout>--}}
{{--    <x-slot name="header">--}}
{{--        <h2 class="font-semibold text-xl text-gray-800 leading-tight">--}}
{{--            {{ __('Alterar Registro de Estoque') }}--}}
{{--        </h2>--}}
{{--    </x-slot>--}}

{{--    <div class="py-12">--}}
{{--        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
{{--            <div class="bg-black overflow-hidden shadow-sm sm:rounded-lg">--}}
{{--                <div class="p-6 bg-white border-b border-gray-200">--}}
{{--                    <form method="POST" action="{{ route('inventories.update', $inventory->id) }}">--}}
{{--                        @csrf--}}
{{--                        @method('PATCH')--}}
{{--                        <div>--}}
{{--                            <x-label for="amount" :value="__('Informe a quantidade de produtos em estoque')" />--}}
{{--                            <x-input id="amount" class="block mt-1 w-full" type="text" name="amount"--}}
{{--                                     value="{{$inventory->amount}}" required autofocus />--}}
{{--                        </div>--}}

{{--                        <div class="mt-4">--}}
{{--                            <x-label for="year" :value="__('Informe o Produto')" />--}}
{{--                            <select name="brand_id" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" required>--}}
{{--                                @foreach($products as $p)--}}
{{--                                    <option value="{{$p->id}}"--}}
{{--                                            @if($inventory->product_id == $p->id) selected @endif--}}
{{--                                    >{{$p->name}}</option>--}}
{{--                                @endforeach--}}
{{--                            </select>--}}
{{--                        </div>--}}

{{--                        <div class="flex items-center justify-end mt-4">--}}
{{--                            <x-button class="ml-4">--}}
{{--                                {{ __('Alterar') }}--}}
{{--                            </x-button>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</x-app-layout>--}}
<x-admin-layout>
    <div class="sm:mt-0 flex justify-center mt-16">
        <div class="md:grid md:grid-cols-2 md:gap-6">
            <div class="mt-5 md:mt-0 md:col-span-12">
                <form method="POST" action="{{ route('inventories.update', $inventory->id) }}">
                    @csrf
                    @method('PATCH')
                    <h3 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">{{__('New Inventory Record')}}</h3>
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white dark:bg-gray-800 sm:p-6">
                            <div class="grid grid-cols-6 gap-10">

                                <div class="col-span-12">
                                    <label for="amount" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Amount</label>
                                    <input id="amount" type="text" name="amount" value="{{$inventory->amount}}" required class="block w-full mt-1 text-sm dark:border-gray-700 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"/>
                                </div>

                                <div class="col-span-12">
                                    <label for="product_id" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Product Inventory</label>
                                    <select id="product_id" type="text" name="product_id" required class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-700 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                            @foreach($products as $p)
                                                <option value="{{$p->id}}" @if($inventory->product_id == $p->id) selected @endif>{{$p->name}}</option>
                                            @endforeach
                                    </select>
                                </div>

                            </div>
                        </div>
                        <div class="px-4 py-3 bg-gray-50 dark:bg-gray-700 text-right sm:px-6">
                            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-purple-600 hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                {{__('Update')}}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
