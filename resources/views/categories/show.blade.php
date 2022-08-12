<x-admin-layout>

    <div class="py-12">
        <div class="container mx-auto w-5/6 md:w-2/3 h-full">
            <!-- Code block starts -->
            <div
                class="bg-white dark:bg-gray-800 py-4 flex flex-col sm:flex-row items-start sm:items-center justify-between px-5 sm:px-10 shadow rounded-t">
                <div class="ml-2">
                    <h2 class="focus:outline-none text-gray-800 dark:text-gray-100 text-xl font-bold">Options</h2>
                </div>
                <div>
                    <form action="" method="post" style="display: inline-block" id="form_delete">
                        @csrf
                        @method('DELETE')
                        <button
                            class="focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 focus:bg-gray-400 hover:bg-gray-400 focus:text-white hover:text-white font-normal bg-gray-200 dark:bg-gray-700 dark:hover:bg-gray-600 dark:text-purple-600 focus:outline-none transition duration-150 ease-in-out hover:bg-gray-300 rounded text-purple-600 px-6 py-2 text-sm">
                            Delete
                        </button>
                    </form>
                    <button
                        class="focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 focus:bg-purple-500 hover:bg-purple-500 ml-2 sm:ml-3 font-normal focus:outline-none bg-purple-700 dark:hover:bg-purple-700 transition duration-150 ease-in-out  dark:bg-purple-600 rounded text-white px-6 py-2 text-sm">
                        <a href="{{ route('categories.edit', $category->id)}}">
                            Update
                        </a>
                    </button>
                </div>
            </div>
            <!-- Code block ends -->
        </div>
    </div>

    <div class="w-full my-auto flex items-center justify-center">
        <div class="xl:w-1/4 sm:w-1/2 w-full 2xl:w-1/5 flex flex-col items-center py-16 md:py-12 bg-gradient-to-r from-purple-700 to-purple-500 rounded-lg">
            <div class="w-full flex items-center justify-center">
                <div class="flex flex-col items-center">
                    <div tabindex="0" class="focus:outline-none h-32 w-32 lg:mb-0">
                        <img src="{{url('storage/categories/'.$category->image)}}" alt="man avatar" class="h-full w-full rounded-full overflow-hidden bg-white shadow" />
                    </div>
                    <p tabindex="0" class="focus:outline-none mt-2 text-xl font-semibold text-center text-white">{{$category->name}}</p>
                </div>
            </div>
            <div class="flex items-center mt-7">
                <div class="">
                    <p tabindex="0" class="focus:outline-none text-xs text-gray-300">Current Inventory</p>
                    <p tabindex="0" class="focus:outline-none mt-2 text-base sm:text-lg md:text-xl 2xl:text-2xl text-gray-50 text-center">{{$quantity}}</p>
                </div>
                {{--                <div class="ml-12">--}}
                {{--                    <p tabindex="0" class="focus:outline-none text-xs text-gray-300">Average</p>--}}
                {{--                    <p tabindex="0" class="focus:outline-none mt-2 text-base sm:text-lg md:text-xl 2xl:text-2xl text-gray-50">$169</p>--}}
                {{--                </div>--}}
            </div>
        </div>
    </div>

</x-admin-layout>




