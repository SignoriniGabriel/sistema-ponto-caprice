<x-guest-layout>
        <div class="flex items-center altura-suggestion">
            <div class="container mx-auto w-full md:w-2/3 max-w-lg flex justify-center">
                <div class="relative w-full rounded shadow-lg p-6 dark:bg-gray-800 bg-white">
                    <p class="xl:text-2xl font-bold leading-none text-gray-800 dark:text-gray-100">{{__('Send Us a Suggestion')}}</p>
                    <form method="POST" action="{{route('suggestions.store')}}" class="mt-5">
                        @csrf
                        <div class="mt-4 flex flex-col">
                            <label for="name" class="font-semibold leading-3 text-gray-800 dark:text-gray-100">Suggestion theme: </label>
                            <input id="name" type="text" name="name" placeholder="" class="font-medium leading-3 text-gray-500 dark:text-gray-400 resize-none bg-gray-50 dark:bg-gray-700 border rounded-lg border-gray-200 dark:border-gray-700 focus:outline-none px-4 py-3 mt-2" />
                        </div>
                        <div class="mt-4 flex flex-col">
                            <label for="description" class=" font-semibold leading-3 text-gray-800 dark:text-gray-100">Describe your suggestion: </label>
                            <textarea id="description" type="text" name="description" placeholder="" class=" font-medium leading-3 text-gray-500 dark:text-gray-400 resize-none h-20 bg-gray-50 dark:bg-gray-700 border rounded-lg border-gray-200 dark:border-gray-700 focus:outline-none px-4 py-3 mt-2"></textarea>
                        </div>
                        <button class="mt-5 focus:outline-none px-5 py-3 bg-indigo-700 dark:bg-indigo-600 hover:bg-opacity-80 rounded font-semibold leading-3 text-gray-100">Submit</button>
                    </form>
                </div>
            </div>
        </div>

</x-guest-layout>
