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
                <h2 class="text-2xl font-semibold leading-tight dark:text-gray-300">{{__('Sales')}}</h2>
            </div>

            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                    <table class="min-w-full leading-normal">
                        <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-5 py-3 border-b-2 border-gray-200 dark:border-gray-500">{{__('Data')}}</th>
                            <th class="px-5 py-3 border-b-2 border-gray-200 dark:border-gray-500">{{__('Customer')}}</th>
                            <th class="px-5 py-3 border-b-2 border-gray-200 dark:border-gray-500">{{__('Total')}}</th>
                            <th class="px-5 py-3 border-b-2 border-gray-200 dark:border-gray-500">{{__('Status')}}</th>
                            <th class="px-5 py-3 border-b-2 border-gray-200 dark:border-gray-500">{{__('Options')}}</th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-50 dark:divide-gray-700 dark:bg-gray-800">
                        @foreach($sales as $p)

                            <tr class="text-gray-700 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700 transition">
                                <td class="px-4 py-5">
                                        <div class="flex items-center text-sm">
                                            <div>
                                                <p class="font-semibold hover:text-gray-900 dark:hover:text-gray-200">{{date_format(date_create($p->created_at), 'd/m/Y')}}</p>
                                            </div>
                                        </div>
                                </td>
                                <td class="px-4 py-3 text-sm">{{($p->user->name)}}</td>
                                <td class="px-4 py-3 text-sm">R${{number_format($p->total,2,",",".")}}</td>
                                <td class="px-4 py-2 text-xs">
                                    @if ($p->status == "closed")
                                        <button class="py-3 px-4 text-sm focus:outline-none leading-none text-green-700 bg-green-100 dark:bg-green-700 dark:text-green-100 rounded pointer-events-none">
                                            Closed
                                        </button>
                                    @elseif ($p->status == "opened")
                                        <button class="py-3 px-4 text-sm focus:outline-none leading-none text-red-700 bg-red-100 dark:bg-red-600 dark:text-red-100 rounded pointer-events-none">
                                            Opened
                                        </button>
                                    @else
                                        <button class="py-3 px-4 text-sm focus:outline-none leading-none text-yellow-700 bg-yellow-100 dark:bg-yellow-500 dark:text-yellow-100 rounded pointer-events-none">
                                            Pending
                                        </button>
                                    @endif
                                </td>
                                <td class="px-4 py-3">
                                    <div class="flex items-center space-x-4 text-sm">
                                        @if ($p->status == "processing")
{{--                                            <button class="px-4 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-purple-600 rounded-md hover:bg-purple-700 focus:outline-none focus:ring focus:ring-indigo-300">--}}
{{--                                                <a href="{{route('sale.receive', $p->id)}}">--}}
{{--                                                    Finish--}}
{{--                                                </a>--}}
{{--                                            </button>--}}
                                            <!-- Code block for button with icon starts -->
                                            <a href="{{route('sale.receive', $p->id)}}"
                                               class="flex items-center bg-white transition duration-150 ease-in-out hover:bg-gray-50 hover:text-purple-600 rounded border border-purple-700 text-purple-700 pl-3 pr-6 py-2 text-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-700 dark:text-white dark:bg-purple-600">
                                                <span class="mr-2">
{{--                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"--}}
{{--                                                         stroke="currentColor">--}}
{{--                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"--}}
{{--                                                              d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>--}}
{{--                                                    </svg>--}}
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                                         viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                                    </svg>
                                                </span>
                                                Finish
                                            </a>
                                            <!-- Code block for button with icon ends -->
                                        @endif
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

</x-admin-layout>


