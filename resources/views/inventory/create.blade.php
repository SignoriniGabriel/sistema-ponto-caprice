<x-admin-layout>
    <div class="sm:mt-0 flex justify-center mt-16">
        <div class="md:grid md:grid-cols-2 md:gap-6">
            <div class="mt-5 md:mt-0 md:col-span-12">
                <form method="POST" action="{{ route('inventories.store') }}">
                    @csrf
                    <h3 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">{{__('New Inventory Record')}}</h3>
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white dark:bg-gray-800 sm:p-6">
                            <div class="grid grid-cols-6 gap-10">

                                <div class="col-span-12">
                                    <label for="amount" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Amount</label>
                                    <input id="amount" type="text" name="amount" required class="block w-full mt-1 text-sm dark:border-gray-700 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"/>
                                </div>

                                <div class="col-span-12">
                                    <label for="category_id" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Product Category</label>
                                    <select id="category_id" type="text" name="product_id" required class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-700 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                        @foreach($products as $p)
                                            <option value="{{$p->id}}">{{$p->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>
                        </div>
                        <div class="px-4 py-3 bg-gray-50 dark:bg-gray-700 text-right sm:px-6">
                            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-purple-600 hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                {{__('Create')}}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
