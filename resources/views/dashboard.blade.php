<x-admin-layout>

    <div class="py-12">

        <div class="container mx-auto max-w-7xl sm:px-6 lg:px-8 mb-8">
            <!-- Code block starts -->
            <div class="w-full bg-white dark:bg-gray-800 py-5 flex items-start xl:items-center justify-between px-5 xl:px-10 shadow rounded-t">
                <div class="mb-4 sm:mb-0 md:mb-0 lg:mb-0 xl:mb-0 lg:w-1/2">
                        <h2 class="text-gray-800 dark:text-gray-100 text-2xl font-bold">Reports</h2>
                    <p class="font-normal text-md text-gray-600 dark:text-gray-400 mt-1">Download product reports via PDF files.</p>
                </div>
                <div class="lg:flex lg:mt-6 xl:mt-0">
                    <!-- Code block for button with icon starts -->
                    <a href="{{route("product_reports")}}" target="_blank" class="mx-2 my-2 flex items-center bg-white transition duration-150 ease-in-out hover:bg-gray-50 hover:text-purple-600 rounded border border-purple-700 text-purple-700 pl-3 pr-6 py-2 text-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-700">
                        <span class="mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                        </span>
                        Products
                    </a>
                    <a href="{{route("category_reports")}}" target="_blank" class="mx-2 my-2 flex items-center bg-white transition duration-150 ease-in-out hover:bg-gray-50 hover:text-purple-600 rounded border border-purple-700 text-purple-700 pl-3 pr-6 py-2 text-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-700">
                        <span class="mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                        </span>
                        Categories
                    </a>
                    <a href="{{route("inventory_reports")}}" target="_blank" class="mx-2 my-2 flex items-center bg-white transition duration-150 ease-in-out hover:bg-gray-50 hover:text-purple-600 rounded border border-purple-700 text-purple-700 pl-3 pr-6 py-2 text-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-700">
                        <span class="mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                        </span>
                        Inventories
                    </a>
{{--                    <a href="{{route("product_reports")}}" target="_blank" class="mx-2 my-2 flex items-center bg-white transition duration-150 ease-in-out hover:bg-gray-50 hover:text-purple-600 rounded border border-purple-700 text-purple-700 pl-3 pr-6 py-2 text-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-700">--}}
{{--                        <span class="mr-2">--}}
{{--                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />--}}
{{--                            </svg>--}}
{{--                        </span>--}}
{{--                        Products--}}
{{--                    </a>--}}
                    <!-- Code block for button with icon ends -->
                </div>
            </div>
            <!-- Code block ends -->
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="w-full bg-white dark:bg-gray-800 py-5 xl:items-center justify-between px-5 xl:px-10 shadow rounded-t">
                <div class="p-6 bg-white border-gray-200">
                    <div id="chart" style="height: 300px;"></div>

                    <script src="https://unpkg.com/echarts/dist/echarts.min.js"></script>
                    <script src="https://unpkg.com/@chartisan/echarts/dist/chartisan_echarts.js"></script>

                    <script>
                        const chart = new Chartisan({
                            el: '#chart',
                            url: "@chart('graficovendas')",
                            hooks: new ChartisanHooks()
                                .title("Sales by Date")
                                .legend()
                                .colors('#7e3af2')
                                .tooltip()
                                .datasets(['bar']),
                        });

                    </script>

                </div>
            </div>
        </div>
    </div>
{{--    <x-charts-layout>--}}
{{--        <main class="h-full pb-16 overflow-y-auto">--}}
{{--            <div class="container px-6 mx-auto grid">--}}
{{--                <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">Charts</h2>--}}

{{--                <div class="grid gap-6 mb-8 md:grid-cols-2">--}}
{{--                    <!-- Lines chart -->--}}
{{--                    <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">--}}
{{--                        <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">Lines</h4>--}}
{{--                        <canvas id="line"></canvas>--}}
{{--                        <div class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400">--}}
{{--                            <!-- Chart legend -->--}}
{{--                            <div class="flex items-center">--}}
{{--                                <span class="inline-block w-3 h-3 mr-1 bg-teal-500 rounded-full"></span>--}}
{{--                                <span>Organic</span>--}}
{{--                            </div>--}}
{{--                            <div class="flex items-center">--}}
{{--                                <span class="inline-block w-3 h-3 mr-1 bg-purple-600 rounded-full"></span>--}}
{{--                                <span>Paid</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- Bars chart -->--}}
{{--                    <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">--}}
{{--                        <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">Bars</h4>--}}
{{--                        <canvas id="bars"></canvas>--}}
{{--                        <div class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400">--}}
{{--                            <!-- Chart legend -->--}}
{{--                            <div class="flex items-center">--}}
{{--                                <span class="inline-block w-3 h-3 mr-1 bg-teal-500 rounded-full"></span>--}}
{{--                                <span>Shoes</span>--}}
{{--                            </div>--}}
{{--                            <div class="flex items-center">--}}
{{--                                <span class="inline-block w-3 h-3 mr-1 bg-purple-600 rounded-full"></span>--}}
{{--                                <span>Bags</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </main>--}}
{{--    </x-charts-layout>--}}

</x-admin-layout>

