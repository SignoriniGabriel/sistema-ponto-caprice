<x-admin-layout>
            <div class="sm:mt-0 flex justify-center mt-16">
                <div class="md:grid md:grid-cols-2 md:gap-6">
                    <div class="mt-5 md:mt-0 md:col-span-12">
                        <form method="POST" action="{{route('products.store')}}" enctype="multipart/form-data">
                            @csrf
                            <h3 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">Create New Products</h3>
                            <div class="shadow overflow-hidden sm:rounded-md">
                                <div class="px-4 py-5 bg-white dark:bg-gray-700 sm:p-6">
                                    <div class="grid grid-cols-6 gap-6">

                                        <div class="col-span-12">
                                            <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Product Name</label>
                                            <input id="name" type="text" name="name" required class="block w-full mt-1 text-sm dark:border-gray-700 dark:bg-gray-900 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"/>
                                        </div>

                                        <div class="col-span-12">
                                            <label for="description" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Product description</label>
                                            <textarea id="description" type="text" name="description" required class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-700 dark:bg-gray-900 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" rows="2"></textarea>
                                        </div>

                                        <div class="col-span-12">
                                            <label for="category_id" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Product Category</label>
                                            <select id="category_id" type="text" name="category_id" required class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-700 dark:bg-gray-900 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                                @foreach($categories as $c)
                                                    <option value="{{$c->id}}">{{$c->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-span-12">
                                            <label for="status" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Product Category</label>
                                            <select id="status" name="status"  required class="block w-full mt-1 text-sm dark:border-gray-700 dark:bg-gray-900 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                                                <option value="0">inactive</option>
                                                <option value="1">active</option>
                                            </select>
                                        </div>

                                        <div class="col-span-6 sm:col-span-6 lg:col-span-4">
                                            <label for="price" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Product Price</label>
                                            <input id="price" type="text" step="0.01" name="price" required class="block w-full mt-1 text-sm dark:border-gray-700 dark:bg-gray-900 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"/>
                                        </div>

                                        <div class="col-span-6 sm:col-span-3 lg:col-span-4">
                                            <label for="minimum_stock" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Minimum Stock</label>
                                            <input id="minimum_stock" type="number" min="1" value="1" name="minimum_stock" required class="block w-full mt-1 text-sm dark:border-gray-700 dark:bg-gray-900 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                                        </div>

                                        <div class="col-span-6 sm:col-span-3 lg:col-span-4">
                                            <label for="maximum_stock" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Maximum Stock</label>
                                            <input id="maximum_stock" type="number" min="1" value="10" name="maximum_stock" required class="block w-full mt-1 text-sm dark:border-gray-700 dark:bg-gray-900 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                                        </div>


                                        <div class="col-span-12 mb-2">
                                            <label for="image" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Product Image</label>
                                            <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 dark:border-gray-500 border-dashed rounded-md">
                                                <div class="space-y-1 text-center">
                                                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                    <div class="flex text-sm text-gray-600">
                                                        <label for="image" class="relative cursor-pointer bg-white dark:bg-gray-700 rounded-md font-medium text-purple-600 hover:text-purple-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                                            <span>Upload a file</span>
                                                            <input id="image" name="image" type="file" required class="sr-only">
                                                        </label>
                                                        <p class="pl-1 dark:text-gray-400">or drag and drop</p>
                                                    </div>
                                                    <p class="text-xs text-gray-500 dark:text-gray-300">
                                                        PNG, JPG, GIF up to 10MB
                                                    </p>
                                                </div>
                                            </div>
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
