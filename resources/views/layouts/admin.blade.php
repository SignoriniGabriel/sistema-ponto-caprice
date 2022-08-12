<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Ponto Caprice Atelier</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}" media="screen" />
    <link rel="stylesheet" href="{{asset('css/tailwind.output.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/personal.css')}}"/>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="{{asset('js/init-alpine.js')}}"></script>
    <script src="{{asset('js/focus-trap.js')}}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" defer></script>
</head>
<body>
<div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
    <!-- Desktop sidebar -->
    <aside class="z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0">
        <div class="py-4 text-gray-500 dark:text-gray-400">
            <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="{{ route('dashboard') }}">
                <img class="mx-auto" src="{{url('storage/assets/logo/logo-pontocaprice-purple.png')}}">
            </a>
            <!-- Search input -->
{{--            <div class="flex justify-center px-6 mt-12">--}}
{{--                <div class="relative w-full max-w-xl focus-within:text-purple-500">--}}
{{--                    <div class="absolute inset-y-0 flex items-center pl-2">--}}
{{--                        <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">--}}
{{--                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>--}}
{{--                        </svg>--}}
{{--                    </div>--}}
{{--                    <input class="w-full h-10 pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"--}}
{{--                           type="text"--}}
{{--                           placeholder="Search..."--}}
{{--                           aria-label="Search"/>--}}
{{--                </div>--}}
{{--            </div>--}}

            <ul class="mt-6">
                <li class="relative px-6 py-1">
{{--                    <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>--}}
                    <div class="flex items-center px-2 py-3 rounded-md hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700">
                        <a class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100" href="{{route('dashboard')}}">
                            <svg class="w-5 h-5"
                                 aria-hidden="true"
                                 fill="none"
                                 stroke-linecap="round"
                                 stroke-linejoin="round"
                                 stroke-width="2"
                                 viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                            <span class="ml-4">Dashboard</span>
                        </a>
                    </div>
                </li>
            </ul>
            <ul>
                <li class="relative px-6 py-1">
                    <div class="flex items-center px-2 py-3 rounded-md hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700">
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"  href="{{route('suggestions.index')}}">
                            <svg class="w-5 h-5"
                                 aria-hidden="true"
                                 fill="none"
                                 stroke-linecap="round"
                                 stroke-linejoin="round"
                                 stroke-width="2"
                                 viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                            </svg>
                            <span class="ml-4">Reports</span>
                        </a>
                    </div>
                </li>
{{--                <li class="relative px-6 py-1">--}}
{{--                    <div class="flex items-center px-2 py-3 rounded-md hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700">--}}
{{--                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="{{route('products.index')}}">--}}
{{--                            <svg--}}
{{--                                class="w-5 h-5"--}}
{{--                                aria-hidden="true"--}}
{{--                                fill="none"--}}
{{--                                stroke-linecap="round"--}}
{{--                                stroke-linejoin="round"--}}
{{--                                stroke-width="2"--}}
{{--                                viewBox="0 0 24 24"--}}
{{--                                stroke="currentColor">--}}
{{--                                <path--}}
{{--                                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"--}}
{{--                                ></path>--}}
{{--                            </svg>--}}
{{--                            <span class="ml-4">Products</span>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="relative px-6 py-1">--}}
{{--                    <div class="flex items-center px-2 py-3 rounded-md hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700">--}}
{{--                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="{{route('inventories.index')}}">--}}
{{--                            <svg--}}
{{--                                class="w-5 h-5"--}}
{{--                                aria-hidden="true"--}}
{{--                                fill="none"--}}
{{--                                stroke-linecap="round"--}}
{{--                                stroke-linejoin="round"--}}
{{--                                stroke-width="2"--}}
{{--                                viewBox="0 0 24 24"--}}
{{--                                stroke="currentColor">--}}
{{--                                <path d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>--}}
{{--                                <path d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>--}}
{{--                            </svg>--}}
{{--                            <span class="ml-4">Inventories</span>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="relative px-6 py-1 ">--}}
{{--                    <div class="flex items-center px-2 py-3 rounded-md hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700">--}}
{{--                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200  "--}}
{{--                           href="{{route('categories.index')}}" >--}}
{{--                            <svg class="w-5 h-5"--}}
{{--                                 aria-hidden="true"--}}
{{--                                 fill="none"--}}
{{--                                 stroke-linecap="round"--}}
{{--                                 stroke-linejoin="round"--}}
{{--                                 stroke-width="2"--}}
{{--                                 viewBox="0 0 24 24"--}}
{{--                                 stroke="currentColor">--}}
{{--                                <path d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"></path>--}}
{{--                            </svg>--}}
{{--                            <span class="ml-4">Categories</span>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="relative px-6 py-1">--}}
{{--                    <div class="flex items-center px-2 py-3 rounded-md hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700">--}}
{{--                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"--}}
{{--                           href="{{route('suggestions.index')}}">--}}
{{--                            <svg--}}
{{--                                class="w-5 h-5"--}}
{{--                                aria-hidden="true"--}}
{{--                                fill="none"--}}
{{--                                stroke-linecap="round"--}}
{{--                                stroke-linejoin="round"--}}
{{--                                stroke-width="2"--}}
{{--                                viewBox="0 0 24 24"--}}
{{--                                stroke="currentColor">--}}
{{--                                <path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"</path>--}}
{{--                            </svg>--}}
{{--                            <span class="ml-4">Suggestions</span>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </li>--}}
                <li class="relative px-6 py-1">
                    <div class="flex items-center px-2 py-3 rounded-md hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700">
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                           href="{{route('sale.view')}}">
                            <svg
                                class="w-5 h-5"
                                aria-hidden="true"
                                fill="none"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                            </svg>
                            <span class="ml-4">Sales</span>
                        </a>
                    </div>
                </li>
                <li class="relative px-6 py-3">
                    <div class="flex items-center px-2 py-3 rounded-md hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700">
                        <button class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" @click="togglePagesMenu" aria-haspopup="true">
                                <span class="inline-flex items-center">
                                  <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path>
                                  </svg>
                                  <span class="ml-4">Manage</span>
                                </span>
                            <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <template x-if="isPagesMenuOpen">
                        <ul
                            x-transition:enter="transition-all ease-in-out duration-300"
                            x-transition:enter-start="opacity-25 max-h-0"
                            x-transition:enter-end="opacity-100 max-h-xl"
                            x-transition:leave="transition-all ease-in-out duration-300"
                            x-transition:leave-start="opacity-100 max-h-xl"
                            x-transition:leave-end="opacity-0 max-h-0"
                            class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900"
                            aria-label="submenu">
                            <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="{{route('categories.index')}}">Categories</a>
                            </li>
                            <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="{{route('products.index')}}">Products</a>
                            </li>
                            <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="{{route('inventories.index')}}">Inventories</a>
                            </li>
                        </ul>
                    </template>
                </li>
            </ul>

{{--            <div class="px-6 my-6">--}}
{{--                <a class="flex items-center justify-between w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"--}}
{{--                href="/registrar">--}}
{{--                    Create account--}}
{{--                    <span class="ml-2" aria-hidden="true">+</span>--}}
{{--                </a>--}}
{{--            </div>--}}

            <!-- Profile menu -->
            <div class="profile-bot">
                <button class="align-middle focus:outline-none" @click="toggleProfileMenu" @keydown.escape="closeProfileMenu" aria-label="Account" aria-haspopup="true">
                    <div class="flex items-center align-bottom px-4 ">
                        <img class="object-cover mx-2 rounded-full h-11 w-11" src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="avatar"/>
                        <h4 class="mx-2 font-medium text-gray-800 dark:text-gray-200 hover:underline"><a href="#">{{ Auth::user()->name }}</a></h4>
                    </div>
                </button>
                <template x-if="isProfileMenuOpen">
                    <ul
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0"
                        @click.away="closeProfileMenu"
                        @keydown.escape="closeProfileMenu"
                        class="absolute left-4 bottom-14 w-56 p-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark:border-gray-700 dark:text-gray-300 dark:bg-gray-700"
                        aria-label="submenu">
                        <!-- Theme toggler -->
                        <li class="flex">
                            <div class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200">
                                <button class="rounded-md focus:outline-none" @click="toggleTheme" aria-label="Toggle color mode">
                                    <template x-if="!dark">
                                        <svg class="w-4 h-4 ml-0.5 mr-3" aria-hidden="true" fill="currentColor" viewBox="0 0 19 19">
                                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                                        </svg>
                                    </template>
                                    <template x-if="dark">
                                        <svg class="w-4 h-4 ml-0.5 mr-3" aria-hidden="true" fill="currentColor" viewBox="0 0 19 19">
                                            <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" clip-rule="evenodd"></path>
                                        </svg>
                                    </template>
                                </button>
                                <span>Mode</span>
                            </div>
                        </li>
                        <li class="flex">
                            <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200" href="{{route("user.edit")}}">
                                <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                                <span>Profile</span>
                            </a>
                        </li>
{{--                        <li class="flex">--}}
{{--                            <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200" href="#">--}}
{{--                                <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                                    <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />--}}
{{--                                </svg>--}}
{{--                                <span>Settings</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
                        <li class="flex">
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200" href="{{route('logout')}}" onclick="event.preventDefault();this.closest('form').submit();">
                                    <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                        <path d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                                    </svg>
                                    <span class="">{{ __('Log out') }}</span>
                                </a>
                            </form>
                        </li>

                    </ul>
                </template>
            </div>
        </div>
    </aside>


    <!-- Mobile sidebar -->
    <!-- Backdrop -->
    <div
        x-show="isSideMenuOpen"
        x-transition:enter="transition ease-in-out duration-150"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in-out duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"
    ></div>
    <aside
        class="fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-white dark:bg-gray-800 md:hidden hamburguer-mobile"
        x-show="isSideMenuOpen"
        x-transition:enter="transition ease-in-out duration-150"
        x-transition:enter-start="opacity-0 transform -translate-x-20"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in-out duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0 transform -translate-x-20"
        @click.away="closeSideMenu"
        @keydown.escape="closeSideMenu"
    >
        <div class="py-4 text-gray-500 dark:text-gray-400 pt-10">
            <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200 text-login" href="#">
                Ponto Caprice
            </a>
            <ul class="mt-6">
                <li class="relative px-6 py-1">
                    <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
                    <div class="flex items-center px-2 py-3 rounded-md hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700">
                        <a class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100" href="{{route('dashboard')}}">
                            <svg class="w-5 h-5"
                                 aria-hidden="true"
                                 fill="none"
                                 stroke-linecap="round"
                                 stroke-linejoin="round"
                                 stroke-width="2"
                                 viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                            <span class="ml-4">Dashboard</span>
                        </a>
                    </div>
                </li>
            </ul>
            <ul>
                <li class="relative px-6 py-1">
                    <div class="flex items-center px-2 py-3 rounded-md hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700">
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"  href="{{route('suggestions.index')}}">
                            <svg class="w-5 h-5"
                                 aria-hidden="true"
                                 fill="none"
                                 stroke-linecap="round"
                                 stroke-linejoin="round"
                                 stroke-width="2"
                                 viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                            </svg>
                            <span class="ml-4">Reports</span>
                        </a>
                    </div>
                </li>
                {{--                <li class="relative px-6 py-1">--}}
                {{--                    <div class="flex items-center px-2 py-3 rounded-md hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700">--}}
                {{--                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="{{route('products.index')}}">--}}
                {{--                            <svg--}}
                {{--                                class="w-5 h-5"--}}
                {{--                                aria-hidden="true"--}}
                {{--                                fill="none"--}}
                {{--                                stroke-linecap="round"--}}
                {{--                                stroke-linejoin="round"--}}
                {{--                                stroke-width="2"--}}
                {{--                                viewBox="0 0 24 24"--}}
                {{--                                stroke="currentColor">--}}
                {{--                                <path--}}
                {{--                                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"--}}
                {{--                                ></path>--}}
                {{--                            </svg>--}}
                {{--                            <span class="ml-4">Products</span>--}}
                {{--                        </a>--}}
                {{--                    </div>--}}
                {{--                </li>--}}
                {{--                <li class="relative px-6 py-1">--}}
                {{--                    <div class="flex items-center px-2 py-3 rounded-md hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700">--}}
                {{--                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="{{route('inventories.index')}}">--}}
                {{--                            <svg--}}
                {{--                                class="w-5 h-5"--}}
                {{--                                aria-hidden="true"--}}
                {{--                                fill="none"--}}
                {{--                                stroke-linecap="round"--}}
                {{--                                stroke-linejoin="round"--}}
                {{--                                stroke-width="2"--}}
                {{--                                viewBox="0 0 24 24"--}}
                {{--                                stroke="currentColor">--}}
                {{--                                <path d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>--}}
                {{--                                <path d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>--}}
                {{--                            </svg>--}}
                {{--                            <span class="ml-4">Inventories</span>--}}
                {{--                        </a>--}}
                {{--                    </div>--}}
                {{--                </li>--}}
                {{--                <li class="relative px-6 py-1 ">--}}
                {{--                    <div class="flex items-center px-2 py-3 rounded-md hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700">--}}
                {{--                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200  "--}}
                {{--                           href="{{route('categories.index')}}" >--}}
                {{--                            <svg class="w-5 h-5"--}}
                {{--                                 aria-hidden="true"--}}
                {{--                                 fill="none"--}}
                {{--                                 stroke-linecap="round"--}}
                {{--                                 stroke-linejoin="round"--}}
                {{--                                 stroke-width="2"--}}
                {{--                                 viewBox="0 0 24 24"--}}
                {{--                                 stroke="currentColor">--}}
                {{--                                <path d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"></path>--}}
                {{--                            </svg>--}}
                {{--                            <span class="ml-4">Categories</span>--}}
                {{--                        </a>--}}
                {{--                    </div>--}}
                {{--                </li>--}}
                {{--                <li class="relative px-6 py-1">--}}
                {{--                    <div class="flex items-center px-2 py-3 rounded-md hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700">--}}
                {{--                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"--}}
                {{--                           href="{{route('suggestions.index')}}">--}}
                {{--                            <svg--}}
                {{--                                class="w-5 h-5"--}}
                {{--                                aria-hidden="true"--}}
                {{--                                fill="none"--}}
                {{--                                stroke-linecap="round"--}}
                {{--                                stroke-linejoin="round"--}}
                {{--                                stroke-width="2"--}}
                {{--                                viewBox="0 0 24 24"--}}
                {{--                                stroke="currentColor">--}}
                {{--                                <path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"</path>--}}
                {{--                            </svg>--}}
                {{--                            <span class="ml-4">Suggestions</span>--}}
                {{--                        </a>--}}
                {{--                    </div>--}}
                {{--                </li>--}}
                <li class="relative px-6 py-1">
                    <div class="flex items-center px-2 py-3 rounded-md hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700">
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                           href="{{route('sale.view')}}">
                            <svg
                                class="w-5 h-5"
                                aria-hidden="true"
                                fill="none"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                            </svg>
                            <span class="ml-4">Sales</span>
                        </a>
                    </div>
                </li>
                <li class="relative px-6 py-3">
                    <div class="flex items-center px-2 py-3 rounded-md hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700">
                        <button class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" @click="togglePagesMenu" aria-haspopup="true">
                                <span class="inline-flex items-center">
                                  <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path>
                                  </svg>
                                  <span class="ml-4">Manage</span>
                                </span>
                            <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <template x-if="isPagesMenuOpen">
                        <ul
                            x-transition:enter="transition-all ease-in-out duration-300"
                            x-transition:enter-start="opacity-25 max-h-0"
                            x-transition:enter-end="opacity-100 max-h-xl"
                            x-transition:leave="transition-all ease-in-out duration-300"
                            x-transition:leave-start="opacity-100 max-h-xl"
                            x-transition:leave-end="opacity-0 max-h-0"
                            class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900"
                            aria-label="submenu">
                            <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="{{route('categories.index')}}">Categories</a>
                            </li>
                            <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="{{route('products.index')}}">Products</a>
                            </li>
                            <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="{{route('inventories.index')}}">Inventories</a>
                            </li>
                        </ul>
                    </template>
                </li>
            </ul>
            <div class="px-6 my-6">
                <button class="flex items-center w-full justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                    Create account
                    <span class="ml-2" aria-hidden="true">+</span>
                </button>
            </div>
            <!-- Profile menu -->
            <div class="profile-bot">
                <button class="align-middle focus:outline-none" @click="toggleProfileMenu" @keydown.escape="closeProfileMenu" aria-label="Account" aria-haspopup="true">
                    <div class="flex items-center align-bottom px-4 ">
                        <img class="object-cover mx-2 rounded-full h-11 w-11" src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="avatar"/>
                        <h4 class="mx-2 font-medium text-gray-800 dark:text-gray-200 hover:underline"><a href="#">{{ Auth::user()->name }}</a></h4>
                    </div>
                </button>
                <template x-if="isProfileMenuOpen">
                    <ul
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0"
                        @click.away="closeProfileMenu"
                        @keydown.escape="closeProfileMenu"
                        class="absolute left-4 bottom-14 w-56 p-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark:border-gray-700 dark:text-gray-300 dark:bg-gray-700"
                        aria-label="submenu">
                        <!-- Theme toggler -->
                        <li class="flex">
                            <div class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200">
                                <button class="rounded-md focus:outline-none" @click="toggleTheme" aria-label="Toggle color mode">
                                    <template x-if="!dark">
                                        <svg class="w-4 h-4 ml-0.5 mr-3" aria-hidden="true" fill="currentColor" viewBox="0 0 19 19">
                                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                                        </svg>
                                    </template>
                                    <template x-if="dark">
                                        <svg class="w-4 h-4 ml-0.5 mr-3" aria-hidden="true" fill="currentColor" viewBox="0 0 19 19">
                                            <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" clip-rule="evenodd"></path>
                                        </svg>
                                    </template>
                                </button>
                                <span>Mode</span>
                            </div>
                        </li>
                        <li class="flex">
                            <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200" href="{{route("user.edit")}}">
                                <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                                <span>Profile</span>
                            </a>
                        </li>
                        {{--                        <li class="flex">--}}
                        {{--                            <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200" href="#">--}}
                        {{--                                <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">--}}
                        {{--                                    <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />--}}
                        {{--                                </svg>--}}
                        {{--                                <span>Settings</span>--}}
                        {{--                            </a>--}}
                        {{--                        </li>--}}
                        <li class="flex">
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200" href="{{route('logout')}}" onclick="event.preventDefault();this.closest('form').submit();">
                                    <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                        <path d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                                    </svg>
                                    <span class="">{{ __('Log out') }}</span>
                                </a>
                            </form>
                        </li>

                    </ul>
                </template>
            </div>
        </div>
    </aside>
    <div class="flex flex-col flex-1 w-full">
        <header class="z-10 py-4">
            <div class="container flex items-center justify-between h-full px-6 mx-auto text-purple-600 dark:text-purple-300">
                <!-- Mobile hamburger -->
                <button
                    class="p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple"
                    @click="toggleSideMenu"
                    aria-label="Menu">
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
        </header>
        <main class="h-full overflow-y-auto">
            <div class="container px-6 mx-auto grid">
                <!-- Conteúdo -->
                {{$slot}}
            </div>
        </main>
    </div>
</div>
<script>
    var Notification = document.getElementById("notification");
    Notification.style.transform = "translateX(150%)";
    Notification.classList.remove("hidden");
    Notification.style.transform = "translateX(0%)";
    function closeModal() {
        Notification.style.transform = "translateX(150%)";
        Notification.classList.add("hidden");
        document.getElementById("margem").remove("h-32");
        setTimeout(function () {
            Notification.style.transform = "translateX(0%)";
        }, 1000);
    }
</script>
</body>
</html>

