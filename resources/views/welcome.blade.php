<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="data()">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ponto Caprice Atelier</title>
    <meta name="description" content="Free open source Tailwind CSS Store template">
    <meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,starter template,free template,store template, shop layout, minimal, monochrome, minimalistic, theme, nordic">

    <link rel="stylesheet" type="text/css" href="../css/app.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/personal.css')}}" />
    <script src="https://cdn.tailwindcss.com"></script>
    <!--Replace with your tailwind.css once created-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cantarell:wght@400;700&display=swap" rel="stylesheet">


    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="{{asset('js/init-alpine.js')}}"></script>
    <script src="{{asset('js/focus-trap.js')}}"></script>

    <style>
        .work-sans {
            font-family: 'Work Sans', sans-serif;
        }

        #menu-toggle:checked + #menu {
            display: block;
        }

        .hover\:grow {
            transition: all 0.3s;
            transform: scale(1);
        }

        .hover\:grow:hover {
            transform: scale(1.02);
        }

        .carousel-open:checked + .carousel-item {
            position: static;
            opacity: 100;
        }

        .carousel-item {
            -webkit-transition: opacity 0.6s ease-out;
            transition: opacity 0.6s ease-out;
        }

        #carousel-1:checked ~ .control-1,
        #carousel-2:checked ~ .control-2,
        #carousel-3:checked ~ .control-3 {
            display: block;
        }

        .carousel-indicators {
            list-style: none;
            margin: 0;
            padding: 0;
            position: absolute;
            bottom: 2%;
            left: 0;
            right: 0;
            text-align: center;
            z-index: 10;
        }

        #carousel-1:checked ~ .control-1 ~ .carousel-indicators li:nth-child(1) .carousel-bullet,
        #carousel-2:checked ~ .control-2 ~ .carousel-indicators li:nth-child(2) .carousel-bullet,
        #carousel-3:checked ~ .control-3 ~ .carousel-indicators li:nth-child(3) .carousel-bullet {
            color: #000;
            /*Set to match the Tailwind colour you want the active one to be */
        }


         .slider {
             width: 200px;
             height: 400px;
             position: relative;
             overflow: hidden;
         }

        .slide-ana {
            height: 360px;
        }

        .slide-ana > div {
            width: 100%;
            height: 100%;
            position: absolute;
            transition: all 0.7s;
        }

        @media (min-width: 200px) and (max-width: 639px) {
            .slider {
                height: 300px;
                width: 170px;
            }
        }

    </style>

</head>

<body class="bg-white text-gray-600 work-sans leading-normal text-base tracking-normal">
{{--            Login e Registro antigo      --}}
{{--            @if (Route::has('login'))--}}
{{--                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">--}}
{{--                    @auth--}}
{{--                        <a href="{{ url('/sale') }}" class="text-sm text-gray-700 underline"></a>--}}
{{--                    @else--}}
{{--                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>--}}

{{--                        @if (Route::has('register'))--}}
{{--                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>--}}
{{--                        @endif--}}
{{--                    @endauth--}}
{{--                </div>--}}
{{--            @endif--}}


<div class="h-full w-full">

    <nav>
        <div class="py-4 px-6 w-full flex xl:hidden justify-between items-center bg-white fixed top-0 z-40">
            <div aria-label="logo" role="img" tabindex="0" class="focus:outline-none">
                <a class="toggleColour no-underline hover:no-underline font-bold text-2xl lg:text-3xl text-gray-600 roboto" href="{{route('home')}}">
                    {{--                            <img src="{{url('storage/assets/logo/logo-pontocaprice.png')}}">--}}
                    Ponto Caprice
                </a>
            </div>
            <div class="flex items-center">
                <button id="menu" aria-label="open menu" class="focus:outline-none focus:ring-2 focus:ring-gray-600 rounded-md text-gray-800" onclick="sidebarHandler(true)">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <line x1="4" y1="6" x2="20" y2="6" />
                        <line x1="4" y1="12" x2="20" y2="12" />
                        <line x1="4" y1="18" x2="20" y2="18" />
                    </svg>
                </button>
            </div>
        </div>
        <!--Mobile responsive sidebar-->
        <div class="fixed w-full h-full transform -translate-x-full z-40 xl:hidden" id="mobile-nav">
            <div class="bg-gray-800 opacity-50 w-full h-full" onclick="sidebarHandler(false)"></div>
            <div class="w-64 z-40 fixed overflow-y-auto z-40 top-0 bg-white shadow h-full flex-col justify-between xl:hidden pb-4 transition duration-150 ease-in-out">
                <div class="px-6 h-full">
                    <div class="flex flex-col justify-between h-full w-full">
                        <div>
                            <div class="mt-6 flex w-full items-center justify-between">
                                <div class="flex items-center justify-between w-full">
                                    <div class="flex items-center">
{{--                                        <img src="{{url('storage/assets/logo/logo-pontocaprice-gray.png')}}">--}}
                                        <a class="toggleColour no-underline hover:no-underline font-bold text-2xl text-gray-600 roboto" href="{{route('home')}}">
                                            {{--                            <img src="{{url('storage/assets/logo/logo-pontocaprice.png')}}">--}}
                                            Ponto Caprice
                                        </a>
                                    </div>
                                    <button id="cross" aria-label="close menu" class="focus:outline-none focus:ring-2 rounded-md text-gray-800" onclick="sidebarHandler(false)">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z"></path>
                                            <line x1="18" y1="6" x2="6" y2="18"></line>
                                            <line x1="6" y1="6" x2="18" y2="18"></line>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <ul class="f-m-m">
                                <li>
                                    <a class="cursor-pointer">
                                        <div class="text-gray-800 pt-10">
                                            <div class="flex items-center">
                                                <p tabindex="0" class="focus:outline-none focus:text-indigo-600 text-indigo-700 xl:text-base text-base ml-3">Dashboard</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="cursor-pointer">
                                        <div class="text-gray-800 pt-8">
                                            <div class="flex items-center justify-between">
                                                <div class="flex items-center">
                                                    <p tabindex="0" class="focus:outline-none focus:text-indigo-600 text-gray-800 xl:text-base md:text-2xl text-base ml-3">Products</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="cursor-pointer">
                                        <div class="text-gray-800 pt-8">
                                            <div class="flex items-center">
                                                <p tabindex="0" class="focus:outline-none focus:text-indigo-600 text-gray-800 xl:text-base md:text-2xl text-base ml-3">Performance</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="text-gray-800 pt-8 cursor-pointer">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center">
                                            <p tabindex="0" class="focus:outline-none focus:text-indigo-600 text-gray-800 xl:text-base md:text-2xl text-base ml-3">Deliverables</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="w-full pt-4">
                            <div class="border-t border-gray-300">
                                <div class="w-full flex items-center justify-between pt-1">
{{--                                    <div class="flex items-center">--}}
{{--                                        <img alt="profile-pic" src="https://tuk-cdn.s3.amazonaws.com/assets/components/boxed_layout/bl_1.png" tabindex="0" class="focus:outline-none  w-8 h-8 rounded-md" />--}}
{{--                                        <p tabindex="0" class="focus:outline-none text-gray-800 text-base leading-4 ml-2 mt-4">{{ Auth::user()->name }}</p>--}}
{{--                                    </div>--}}
{{--                                    <ul class="flex">--}}
{{--                                        <li class="cursor-pointer text-gray-800 pt-5 pb-3">--}}
{{--                                            <div tabindex="0" class="focus:outline-none focus:text-indigo-600 w-6 h-6 md:w-8 md:h-8">--}}
{{--                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-messages" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">--}}
{{--                                                    <path stroke="none" d="M0 0h24v24H0z"></path>--}}
{{--                                                    <path d="M21 14l-3 -3h-7a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1h9a1 1 0 0 1 1 1v10"></path>--}}
{{--                                                    <path d="M14 15v2a1 1 0 0 1 -1 1h-7l-3 3v-10a1 1 0 0 1 1 -1h2"></path>--}}
{{--                                                </svg>--}}
{{--                                            </div>--}}
{{--                                        </li>--}}
{{--                                        <li class="cursor-pointer text-gray-800 pt-5 pb-3 pl-3">--}}
{{--                                            <div tabindex="0" class="focus:outline-none focus:text-indigo-600 w-6 h-6 md:w-8 md:h-8">--}}
{{--                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bell" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">--}}
{{--                                                    <path stroke="none" d="M0 0h24v24H0z"></path>--}}
{{--                                                    <path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6"></path>--}}
{{--                                                    <path d="M9 17v1a3 3 0 0 0 6 0v-1"></path>--}}
{{--                                                </svg>--}}
{{--                                            </div>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Code block ends -->
</div>

<nav id="header" class="fixed w-full z-30 top-0 text-white">
    <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-5">
        <div class="pl-4 flex items-center">
            <a class="toggleColour no-underline hover:no-underline font-bold text-2xl lg:text-3xl text-gray-600 roboto"
               href="{{route('home')}}">
                {{--                            <img src="{{url('storage/assets/logo/logo-pontocaprice.png')}}">--}}
                Ponto Caprice
            </a>
        </div>
        <div class="block lg:hidden pr-4">
            <button id="nav-toggle"
                    class="flex items-center p-1 text-pink-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </button>
        </div>
        <div
            class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 lg:bg-transparent text-black p-4 lg:p-0 z-20 bg-gray-100"
            id="nav-content">
            <ul class="list-reset lg:flex justify-end flex-1 items-center roboto">
                <li class="mr-3">
                    <a class="inline-block py-2 px-4 text-black font-bold no-underline"
                       href="{{route('home')}}">{{ __('Shop')}}</a>
                </li>
{{--                <li class="mr-3">--}}
{{--                    <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4"--}}
{{--                       href="/about">{{ __('About Us')}}</a>--}}
{{--                </li>--}}
                {{--                            <li class="mr-3">--}}
                {{--                                <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="/contact">{{ __('Contact')}}</a>--}}
                {{--                            </li>--}}
                <li class="mr-3">
                @if (Route::has('login'))
                    @auth
                        <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4"
                                   href="{{route('logout')}}"
                                   onclick="event.preventDefault();this.closest('form').submit();">
                                    {{ __('Log out') }}
                                </a>
                            </form>
                </li>
                <li class="mr-3">
                    <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4"
                       href="{{ route('suggestions.create') }}">{{ __('Suggestion')}}</a>
                    @else
                        <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4"
                           href="{{ route('login') }}">{{ __('Login')}}</a>
                    @endauth
                    @endif
                </li>
                <li class="mr-3">
                    <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4"
                       href="{{ route('sale.index') }}">{{ __('Bag') }}</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

{{--        <div class="carousel relative container mx-auto" style="max-width:100%;">--}}
{{--            <div class="carousel-inner relative overflow-hidden w-full">--}}
{{--                <!--Slide 1-->--}}
{{--                <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">--}}
{{--                <div class="carousel-item absolute opacity-0" style="height:70vh;">--}}
{{--                    <div class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-right" style="background-image: url('/storage/assets/Geral/banner-1.png');">--}}

{{--                        <div class="container mx-auto">--}}
{{--                            <div class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide">--}}
{{--                                <p class="text-black text-2xl my-4">Stripy Zig Zag Jigsaw Pillow and Duvet Set</p>--}}
{{--                                <a class="text-xl inline-block no-underline border-b border-gray-600 leading-relaxed hover:text-black hover:border-black" href="#">view product</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--                <label for="carousel-3" class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-gray-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>--}}
{{--                <label for="carousel-2" class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-gray-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>--}}

{{--                <!--Slide 2-->--}}
{{--                <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">--}}
{{--                <div class="carousel-item absolute opacity-0 bg-cover bg-right" style="height:70vh;">--}}
{{--                    <div class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-right" style="background-image: url('https://images.unsplash.com/photo-1533090161767-e6ffed986c88?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjM0MTM2fQ&auto=format&fit=crop&w=1600&q=80');">--}}

{{--                        <div class="container mx-auto">--}}
{{--                            <div class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide">--}}
{{--                                <p class="text-black text-2xl my-4">Real Bamboo Wall Clock</p>--}}
{{--                                <a class="text-xl inline-block no-underline border-b border-gray-600 leading-relaxed hover:text-black hover:border-black" href="#">view product</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--                <label for="carousel-1" class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-gray-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>--}}
{{--                <label for="carousel-3" class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-gray-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>--}}

{{--                <!--Slide 3-->--}}
{{--                <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">--}}
{{--                <div class="carousel-item absolute opacity-0" style="height:70vh;">--}}
{{--                    <div class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-bottom" style="background-image: url('https://images.unsplash.com/photo-1519327232521-1ea2c736d34d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1600&q=80');">--}}

{{--                        <div class="container mx-auto">--}}
{{--                            <div class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide">--}}
{{--                                <p class="text-black text-2xl my-4">Brown and blue hardbound book</p>--}}
{{--                                <a class="text-xl inline-block no-underline border-b border-gray-600 leading-relaxed hover:text-black hover:border-black" href="#">view product</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--                <label for="carousel-2" class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-gray-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>--}}
{{--                <label for="carousel-1" class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-gray-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>--}}

{{--                <!-- Add additional indicators for each slide-->--}}
{{--                <ol class="carousel-indicators">--}}
{{--                    <li class="inline-block mr-3">--}}
{{--                        <label for="carousel-1" class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>--}}
{{--                    </li>--}}
{{--                    <li class="inline-block mr-3">--}}
{{--                        <label for="carousel-2" class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>--}}
{{--                    </li>--}}
{{--                    <li class="inline-block mr-3">--}}
{{--                        <label for="carousel-3" class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>--}}
{{--                    </li>--}}
{{--                </ol>--}}

{{--            </div>--}}
{{--        </div>--}}



{{--        Alternatively if you want to just have a single hero--}}

        <section class="w-full mx-auto bg-nordic-gray-light flex pt-12 md:pt-0 md:items-center bg-cover bg-right">

            <img class="h-full" src="{{url('storage/assets/Geral/banner-sale-1.png')}}">
        <div class="container mx-auto">

            <div class="flex flex-col w-full lg:w-1/2 justify-center items-start  px-6 tracking-wide">
{{--                <h1 class="text-black text-2xl my-4">Stripy Zig Zag Jigsaw Pillow and Duvet Set</h1>--}}
{{--                <a class="text-xl inline-block no-underline border-b border-gray-600 leading-relaxed hover:text-black hover:border-black" href="#">products</a>--}}

            </div>

          </div>

        </section>



            <div class="container 2xl:mx-auto">
                <div class="py-6 lg:px-20 md:px-6 px-4">
                    <div class="flex justify-between items-center">
                        <p class="font-normal 2xl:text-sm leading-3 text-gray-600 dark:text-gray-300">Home</p>
                        <p class="cursor-pointer hover:underline duration-100 font-normal text-base leading-4 text-gray-600 dark:text-gray-300">Showing {{$count}} products</p>
                    </div>
                    <hr class="w-full bg-gray-200 my-6" />

                    <div class="grid lg:grid-cols-4 sm:grid-cols-2 grid-cols-1 lg:gap-y-12 lg:gap-x-8 sm:gap-y-10 sm:gap-x-6 gap-y-6 lg:mt-12 mt-10">
                        @foreach($products as $p)
                            <div class="relative">
                                <div class="relative group">
                                    <div class="flex justify-center items-center opacity-0 bg-gradient-to-t from-gray-800 via-gray-800 to-opacity-30 transition-2 group-hover:opacity-50 absolute top-0 left-0 h-full w-full"></div>
                                    <img class="w-full" src="{{url('storage/products/'.$p->image)}}" />
                                    <div class="absolute bottom-0 p-8 w-full opacity-0 group-hover:opacity-100">
                                        <button class="dark:bg-gray-800 dark:text-gray-300 font-medium text-base font-sans leading-4 border-2 border-gray-100 text-gray-800 transition-2 hover:border-white hover:bg-white bg-gray-100 py-3 w-full"><a href="{{ route('catalogo', $p->id)}}">Purchase</a></button>
                                        <button onclick="popuphandler(true,{{$p->id}})" class="bg-transparent font-medium font-sans text-base leading-4 border-2 hover:bg-white hover:text-gray-800 transition-2 border-white py-3 w-full mt-2 text-white">Quick View</button>
                                    </div>
                                </div>
                                <p class="roboto font-normal dark:text-white text-xl leading-5 text-gray-800 md:mt-6 mt-4">{{$p->name}}</p>
                                <p class="roboto font-semibold dark:text-gray-300 text-xl leading-5 text-gray-800 mt-4">R${{number_format($p->price,2,",",".")}}</p>
                            </div>

                            <!-- Modal -->
                            <div id="popup{{$p->id}}" class="z-50 fixed w-full flex justify-center inset-0 hidden">
                                <div onclick="popuphandler(false,{{$p->id}})" class="w-full h-full z-0 absolute inset-0 bg-gray-900 opacity-50"></div>
                                <div class="mx-auto container">
                                    <div class="flex items-center justify-center h-full w-full">
                                        <div class="bg-white rounded-md shadow fixed overflow-y-auto sm:h-auto w-10/12 md:w-8/12 lg:w-1/2 2xl:w-2/5">
                                            <div class="bg-gray-100 rounded-tl-md rounded-tr-md px-4 md:px-8 md:py-4 py-7 flex items-center justify-between">
                                                <p class="text-base font-semibold">{{$p->name}}</p>
                                                <button role="button" aria-label="close label" onclick="popuphandler(false,{{$p->id}})" class="focus:ring-2 focus:ring-offset-2 focus:ring-gray-600 focus:outline-none">
                                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M21 7L7 21" stroke="#A1A1AA" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M7 7L21 21" stroke="#A1A1AA" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="px-4 md:px-10 pt-6 md:pt-12 md:pb-4 pb-7">
                                                <div class="mt-3 md:mt-4 lg:mt-0 flex flex-col lg:flex-row items-strech justify-center lg:space-x-8">
                                                    {{--                                                                <div class="lg:w-1/2 flex justify-between items-strech bg-gray-50  px-2 py-20 md:py-6 md:px-6 lg:py-24">--}}
                                                    {{--                                                                    <div class="flex items-center">--}}
                                                    {{--                                                                        <button onclick="goPrev()" aria-label="slide back" class="focus:outline-none focus:ring-2 focus:ring-gray-800 hover:bg-gray-100">--}}
                                                    {{--                                                                            <svg class="w-10 h-10 lg:w-16 lg:h-16" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
                                                    {{--                                                                                <path d="M40 16L24 32L40 48" stroke="#1F2937" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />--}}
                                                    {{--                                                                            </svg>--}}
                                                    {{--                                                                        </button>--}}
                                                    {{--                                                                    </div>--}}
                                                    {{--                                                                    <div class="slider">--}}
                                                    {{--                                                                        <div class="slide-ana lg:relative">--}}
                                                    {{--                                                                            <div class="flex" style="transform: translateX(-100%)">--}}
                                                    {{--                                                                                <img src="https://i.ibb.co/fMGD6ZC/eugene-chystiakov-3ne-Swyntb-Q8-unsplash-1-removebg-preview-3-1.png" alt="A black chair with wooden legs" class="w-full h-full" />--}}
                                                    {{--                                                                            </div>--}}
                                                    {{--                                                                            <div class="flex" style="transform: translateX(0%)">--}}
                                                    {{--                                                                                <img src="https://i.ibb.co/fMGD6ZC/eugene-chystiakov-3ne-Swyntb-Q8-unsplash-1-removebg-preview-3-1.png" alt="A black chair with wooden legs" class="w-full h-full" />--}}
                                                    {{--                                                                            </div>--}}
                                                    {{--                                                                            <div class="flex" style="transform: translateX(100%)">--}}
                                                    {{--                                                                                <img src="https://i.ibb.co/fMGD6ZC/eugene-chystiakov-3ne-Swyntb-Q8-unsplash-1-removebg-preview-3-1.png" alt="A black chair with wooden legs" class="w-full h-full" />--}}
                                                    {{--                                                                            </div>--}}
                                                    {{--                                                                        </div>--}}
                                                    {{--                                                                    </div>--}}
                                                    {{--                                                                    <div class="flex items-center">--}}
                                                    {{--                                                                        <button onclick="goNext()" aria-label="slide forward" class="focus:outline-none focus:ring-2 focus:ring-gray-800 hover:bg-gray-100">--}}
                                                    {{--                                                                            <svg class="w-10 h-10 lg:w-16 lg:h-16" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
                                                    {{--                                                                                <path d="M24 16L40 32L24 48" stroke="#1F2937" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />--}}
                                                    {{--                                                                            </svg>--}}
                                                    {{--                                                                        </button>--}}
                                                    {{--                                                                    </div>--}}
                                                    {{--                                                                </div>--}}
                                                    <img src="{{url('storage/products/'.$p->image)}}" alt="product"
                                                         class="lg:w-1/2 flex w-full h-full"/>
                                                    <div
                                                        class="lg:w-1/2 flex flex-col justify-center mt-7 md:mt-8 lg:mt-0 pb-8 lg:pb-0">
                                                        <h1 class="text-3xl lg:text-4xl font-semibold text-gray-800 dark:text-white">{{$p->name}}</h1>
                                                        <p class="text-base leading-normal text-gray-600 dark:text-white mt-2">{{$p->description}}</p>
                                                        <p class="text-3xl font-medium text-gray-600 dark:text-white mt-8 md:mt-10">
                                                            R${{number_format($p->price,2,",",".")}}</p>
                                                        <div
                                                            class="flex items-center flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-6 lg:space-x-8 mt-8 md:mt-16">
                                                            <button
                                                                class="w-full mb-8 border border-gray-800 text-base font-medium leading-none text-white uppercase py-6 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 bg-gray-800 text-white dark:bg-white dark:text-gray-900 dark:hover:bg-gray-200">
                                                                <a href="{{ route('sale.add', $p->id)}}"> Add to Cart</a></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                    </div>
                </div>
            </div>

{{--<div class="2xl:container 2xl:mx-auto md:py-12 lg:px-20 md:px-6 py-9 px-4">--}}
{{--    <div id="viewerBox" class="lg:p-10 md:p-6 p-4 bg-white dark:bg-gray-900 hidden">--}}

{{--    </div>--}}
{{--</div>--}}



<div class="2xl:container 2xl:mx-auto md:py-12 lg:px-20 md:px-6 py-9 px-4">
    <div class="text-center">
        <h2 class="font-semibold dark:text-white lg:text-4xl text-3xl lg:leading-9 md:leading-7 leading-9 text-gray-800 md:w-full w-9/12 mx-auto">Follow Us on Instagram</h2>
        <p class="font-normal text-base leading-6 dark:text-gray-400 text-gray-600 mt-4 lg:w-5/12 md:w-9/12 mx-auto">Follow us on instagram @<a href="https://www.instagram.com/pontocaprice/" rel="noopener noreferrer" target="_blank" class="underline cursor-pointer">pontocaprice</a> and tag us to get featured on our timeline</p>
    </div>
    <div class="grid lg:grid-cols-4 sm:grid-cols-2 grid-cols-1 lg:grap-8 md:gap-6 gap-4 mt-10">
        <div class="relative group">
            <img src="{{url('storage/assets/Geral/insta-1.jpg')}}" alt="" class="lg:block hidden w-full" />
            <div class="flex transition-2 justify-center items-center opacity-0 bg-gradient-to-t from-gray-800 via-gray-800 to-opacity-30 group-hover:opacity-50 absolute top-0 left-0 h-full w-full"></div>
            <div class="absolute top-0 left-0 w-full h-full flex justify-center items-center opacity-0 hover:opacity-100">
                <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M42.6665 10.6665H21.3332C15.4421 10.6665 10.6665 15.4421 10.6665 21.3332V42.6665C10.6665 48.5575 15.4421 53.3332 21.3332 53.3332H42.6665C48.5575 53.3332 53.3332 48.5575 53.3332 42.6665V21.3332C53.3332 15.4421 48.5575 10.6665 42.6665 10.6665Z" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M32 40C36.4183 40 40 36.4183 40 32C40 27.5817 36.4183 24 32 24C27.5817 24 24 27.5817 24 32C24 36.4183 27.5817 40 32 40Z" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M44 20V20.001" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
        </div>
        <div class="relative group">
            <img src="{{url('storage/assets/Geral/insta-3.jpg')}}" alt="" class="lg:block hidden w-full" />
            <div class="opacity-0 transition-2 bg-gradient-to-t from-gray-800 via-gray-800 to-opacity-30 group-hover:opacity-50 absolute top-0 left-0 h-full w-full"></div>
            <div class="absolute top-0 left-0 w-full h-full flex justify-center items-center opacity-0 hover:opacity-100">
                <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M42.6665 10.6665H21.3332C15.4421 10.6665 10.6665 15.4421 10.6665 21.3332V42.6665C10.6665 48.5575 15.4421 53.3332 21.3332 53.3332H42.6665C48.5575 53.3332 53.3332 48.5575 53.3332 42.6665V21.3332C53.3332 15.4421 48.5575 10.6665 42.6665 10.6665Z" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M32 40C36.4183 40 40 36.4183 40 32C40 27.5817 36.4183 24 32 24C27.5817 24 24 27.5817 24 32C24 36.4183 27.5817 40 32 40Z" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M44 20V20.001" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
        </div>
        <div class="relative group">
            <img src="{{url('storage/assets/Geral/insta-2.jpg')}}" alt="" class="lg:block hidden w-full" />
            <div class="opacity-0 transition-2 bg-gradient-to-t from-gray-800 via-gray-800 to-opacity-30 group-hover:opacity-50 absolute top-0 left-0 h-full w-full"></div>
            <div class="absolute top-0 left-0 w-full h-full flex justify-center items-center opacity-0 hover:opacity-100">
                <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M42.6665 10.6665H21.3332C15.4421 10.6665 10.6665 15.4421 10.6665 21.3332V42.6665C10.6665 48.5575 15.4421 53.3332 21.3332 53.3332H42.6665C48.5575 53.3332 53.3332 48.5575 53.3332 42.6665V21.3332C53.3332 15.4421 48.5575 10.6665 42.6665 10.6665Z" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M32 40C36.4183 40 40 36.4183 40 32C40 27.5817 36.4183 24 32 24C27.5817 24 24 27.5817 24 32C24 36.4183 27.5817 40 32 40Z" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M44 20V20.001" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
        </div>
        <div class="relative group">
            <img src="{{url('storage/assets/Geral/insta-4.jpg')}}" alt="" class="lg:block hidden w-full" />
            <div class="opacity-0 transition-2 bg-gradient-to-t from-gray-800 via-gray-800 to-opacity-30 group-hover:opacity-50 absolute top-0 left-0 h-full w-full"></div>
            <div class="absolute top-0 left-0 w-full h-full flex justify-center items-center opacity-0 hover:opacity-100">
                <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M42.6665 10.6665H21.3332C15.4421 10.6665 10.6665 15.4421 10.6665 21.3332V42.6665C10.6665 48.5575 15.4421 53.3332 21.3332 53.3332H42.6665C48.5575 53.3332 53.3332 48.5575 53.3332 42.6665V21.3332C53.3332 15.4421 48.5575 10.6665 42.6665 10.6665Z" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M32 40C36.4183 40 40 36.4183 40 32C40 27.5817 36.4183 24 32 24C27.5817 24 24 27.5817 24 32C24 36.4183 27.5817 40 32 40Z" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M44 20V20.001" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
        </div>
    </div>
</div>


<!-- Início Cookies -->
{{--            <div class="relative flex justify-center items-center">--}}
{{--                <button onclick="showMenu(true)" class="focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 focus:outline-none absolute z-0 top-48 py-2 px-7 bg-gray-800 text-white rounded text-base hover:bg-black">Open</button>--}}

{{--                <div id="menu" class="w-full h-full bg-black bg-opacity-20 top-0 fixed sticky-0">--}}
{{--                    <div class="absolute px-4 md:px-0 bottom-6 xl:bottom-20 sm:right-6 xl:right-20 flex justify-end items-end">--}}
{{--                        <div class="bg-gray-100 dark:bg-gray-800 dark:bg-opacity-100 bg-opacity-90 sm:w-96 md:w-6/12 lg:w-4/12 xl:w-4/12 relative flex flex-col justify-start items-start  px-4 md:px-8 py-12">--}}
{{--                            <div role="banner">--}}
{{--                                <svg width="96" height="96" viewBox="0 0 96 96" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                    <g clip-path="url(#clip0)">--}}
{{--                                        <path d="M50.2352 2.63368L47.8819 8.67043C47.6963 9.14668 47.329 9.52974 46.861 9.73505L39.9409 12.7722C39.4729 12.9777 38.9425 12.9887 38.4662 12.8029L34.4057 11.2195C33.054 10.6924 32.7514 8.92205 33.8432 7.96655C36.7737 5.40192 40.1395 3.23555 43.894 1.58761C45.2061 1.01161 46.5323 0.513987 47.8679 0.0921125C49.407 -0.393887 50.8215 1.12974 50.2352 2.63368Z" fill="#D67F4F" />--}}
{{--                                        <path d="M50.2351 2.63326L47.8823 8.67151C47.695 9.14664 47.3279 9.53101 46.8605 9.73576L39.9397 12.7723C39.4722 12.9789 38.9429 12.9887 38.4659 12.8033L35.7539 11.7448L40.3317 9.73595C40.7992 9.5312 41.1682 9.14682 41.3536 8.6717L43.7063 2.63345C43.8415 2.28957 43.8706 1.94382 43.8164 1.6232C43.8415 1.61157 43.8685 1.60014 43.8936 1.58851C45.2052 1.01289 46.5321 0.51451 47.867 0.0933851C49.4063 -0.393552 50.8203 1.13064 50.2351 2.63326Z" fill="#C76D3D" />--}}
{{--                                        <path--}}
{{--                                            d="M82.6555 56.9072C82.6555 78.4966 65.1537 96.0004 43.5623 96.0006C21.9181 96.0008 4.48151 78.5753 4.46876 56.9311C4.45938 41.0003 13.9771 27.2929 27.6378 21.1932C28.3638 20.869 29.2156 21.0332 29.7777 21.5954L34.0848 25.9022C34.4461 26.2635 34.9364 26.4666 35.4475 26.4666H43.0049C43.516 26.4666 44.0061 26.6697 44.3676 27.031L50.7949 33.4583C51.1562 33.8198 51.6466 34.0227 52.1577 34.0227L59.4831 34.0142C60.1624 34.0135 60.7921 34.3705 61.1402 34.954L63.0287 38.1192C63.3529 38.6625 63.9235 39.0122 64.5548 39.0546L77.6819 39.9338C78.3938 39.9814 79.0244 40.4174 79.3139 41.0695C81.4617 45.9096 82.6555 51.2687 82.6555 56.9072Z"--}}
{{--                                            fill="#D67F4F"--}}
{{--                                        />--}}
{{--                                        <path--}}
{{--                                            d="M82.6567 56.9065C82.6567 78.496 65.1564 96 43.5652 96C42.4642 96 41.3748 95.9556 40.2969 95.8649C60.3622 94.2094 76.1298 77.3989 76.1298 56.9067C76.1298 51.2684 74.9341 45.9083 72.7863 41.0697C72.4985 40.4168 71.8668 39.9803 71.156 39.9338L58.0289 39.055C57.3972 39.0124 56.8256 38.6629 56.5031 38.1182L54.614 34.9544C54.2953 34.4192 53.7389 34.0755 53.1247 34.0214L59.4854 34.0137C60.1634 34.0137 60.7931 34.371 61.1428 34.9544L63.0299 38.1182C63.3545 38.6629 63.9262 39.0126 64.5558 39.055L77.6829 39.9338C78.3956 39.9801 79.0254 40.4166 79.3151 41.0697C81.4629 45.9081 82.6567 51.2684 82.6567 56.9065Z"--}}
{{--                                            fill="#C76D3D"--}}
{{--                                        />--}}
{{--                                        <path d="M79.6739 11.7333L74.2551 17.152C73.8938 17.5133 73.4035 17.7164 72.8924 17.7164H65.2791C64.768 17.7164 64.2779 17.5133 63.9164 17.152L58.2871 11.5227C57.5346 10.7703 57.5345 9.55021 58.2869 8.79759L63.9923 3.09065C64.4648 2.61815 65.1492 2.42146 65.7993 2.57653C70.7888 3.76659 75.4058 5.91496 79.4481 8.81446C80.4093 9.50371 80.51 10.8972 79.6739 11.7333Z" fill="#D67F4F" />--}}
{{--                                        <path d="M79.673 11.7329L74.2548 17.153C73.8916 17.5141 73.403 17.717 72.8911 17.717H66.3624C66.8743 17.717 67.365 17.5141 67.7261 17.153L73.1443 11.7329C73.9807 10.8965 73.8802 9.5039 72.9183 8.81427C69.992 6.71465 66.7623 5.00896 63.3086 3.77484L63.9924 3.09102C64.4638 2.61777 65.1495 2.42071 65.7984 2.57727C70.7878 3.76715 75.4042 5.91515 79.4471 8.81446C80.409 9.5039 80.5093 10.8965 79.673 11.7329Z" fill="#C76D3D" />--}}
{{--                                        <path d="M87.8704 35.0432L79.9895 27.6289C79.5286 27.1952 79.31 26.5629 79.4045 25.9372L79.895 22.6935C80.027 21.8209 80.7348 21.1494 81.613 21.0635L88.9555 20.3462C89.9703 20.247 90.8884 20.9552 91.0478 21.9622C91.6737 25.9164 91.6947 29.9593 91.0953 33.9401C90.8648 35.471 88.9981 36.104 87.8704 35.0432Z" fill="#D67F4F" />--}}
{{--                                        <path d="M91.0973 33.9403C90.8656 35.4722 88.9996 36.1037 87.8716 35.0432L85.8396 33.133C86.3206 29.4147 86.2626 25.65 85.6793 21.9627C85.6002 21.4585 85.3296 21.0297 84.9531 20.7381L88.9574 20.346C89.9714 20.2476 90.8909 20.9563 91.0493 21.9627C91.6748 25.9165 91.696 29.9593 91.0973 33.9403Z" fill="#C76D3D" />--}}
{{--                                        <path d="M56.2879 24.6387L55.5352 24.8763C54.5203 25.1967 53.4378 24.6334 53.1174 23.6185L52.043 20.215C51.7226 19.2001 52.2858 18.1176 53.3008 17.7972L54.0534 17.5596C55.0684 17.2392 56.1508 17.8024 56.4712 18.8174L57.5456 22.2209C57.8659 23.2358 57.3028 24.3183 56.2879 24.6387Z" fill="#9D552E" />--}}
{{--                                        <path d="M26.2428 53.5259L21.9438 53.0905C21.1552 53.0106 20.4956 52.4571 20.2798 51.6944L18.7453 46.2692C18.4603 45.2618 19.0299 44.2109 20.0293 43.8994L25.0574 42.3327C25.8011 42.1009 26.6109 42.3385 27.1117 42.9351L30.2765 46.7061C30.8212 47.3551 30.8793 48.2834 30.4199 48.9951L28.0604 52.6516C27.6669 53.2613 26.9647 53.599 26.2428 53.5259Z" fill="#9D552E" />--}}
{{--                                        <path d="M30.42 48.9949L28.0596 52.6516C27.6675 53.2619 26.9644 53.5981 26.242 53.5264L22.261 53.1228C22.4271 52.9934 22.5739 52.8349 22.6917 52.6514L25.0502 48.9947C25.51 48.2821 25.452 47.3549 24.9073 46.7059L22.0273 43.2773L25.0579 42.3327C25.8015 42.1009 26.611 42.3385 27.1112 42.9353L30.2772 46.7057C30.8218 47.3551 30.8798 48.2822 30.42 48.9949Z" fill="#8E4D29" />--}}
{{--                                        <path d="M37.5464 70.5843L37.111 74.8833C37.0311 75.672 36.4776 76.3316 35.7149 76.5474L30.2898 78.0819C29.2823 78.3669 28.2314 77.7973 27.9199 76.7979L26.3532 71.7697C26.1214 71.0261 26.359 70.2163 26.9556 69.7155L30.7266 66.5507C31.3756 66.006 32.3039 65.9479 33.0156 66.4072L36.6721 68.7667C37.2818 69.1603 37.6195 69.8623 37.5464 70.5843Z" fill="#9D552E" />--}}
{{--                                        <path d="M37.547 70.5848L37.1105 74.8845C37.0313 75.6726 36.4769 76.3313 35.7158 76.5476L30.29 78.0814C29.4207 78.3287 28.5187 77.9385 28.0898 77.1851L30.346 76.5478C31.109 76.3314 31.6615 75.6727 31.7407 74.8847L32.1772 70.5849C32.2505 69.8625 31.9126 69.1614 31.3021 68.7673L29.4845 67.5949L30.7265 66.5518C31.3754 66.0071 32.3026 65.9492 33.0155 66.4069L36.6719 68.7673C37.2822 69.1611 37.6203 69.8623 37.547 70.5848Z" fill="#8E4D29" />--}}
{{--                                        <path d="M63.4414 55.0509L62.9336 60.0647C62.8405 60.9843 62.1949 61.7538 61.3054 62.0053L54.9782 63.7948C53.8033 64.127 52.5776 63.4629 52.2144 62.2972L50.3872 56.4332C50.1171 55.566 50.394 54.6214 51.0898 54.0375L55.4876 50.3466C56.2446 49.7113 57.327 49.6434 58.1573 50.1793L62.4216 52.931C63.1328 53.39 63.5267 54.2089 63.4414 55.0509Z" fill="#9D552E" />--}}
{{--                                        <path d="M63.4408 55.0511L62.9328 60.0655C62.8402 60.985 62.195 61.7537 61.3046 62.0066L54.9787 63.7952C54.0515 64.0579 53.0915 63.6986 52.5508 62.9627L55.9368 62.0066C56.8254 61.7535 57.4706 60.9848 57.5651 60.0655L58.0712 55.0511C58.1582 54.2091 57.764 53.3899 57.0513 52.9322L54.4282 51.2382L55.4887 50.3477C56.244 49.7123 57.3275 49.6446 58.1582 50.1797L62.4212 52.9322C63.1316 53.3899 63.5257 54.2089 63.4408 55.0511Z" fill="#8E4D29" />--}}
{{--                                        <path d="M69.6184 80.1822L72.3504 83.53C72.8516 84.144 72.9266 85.002 72.54 85.6937L69.7888 90.6149C69.2779 91.5287 68.1321 91.8692 67.2051 91.3827L62.5418 88.935C61.8521 88.5732 61.4473 87.8324 61.5152 87.0565L61.9438 82.1522C62.0175 81.3081 62.6327 80.6108 63.4611 80.4321L67.7151 79.5151C68.4242 79.3622 69.1594 79.6199 69.6184 80.1822Z" fill="#9D552E" />--}}
{{--                                        <path d="M72.5391 85.6929L69.7885 90.6146C69.2785 91.5283 68.1312 91.8682 67.204 91.3815L64.72 90.0776L67.1712 85.6929C67.5574 85.0014 67.4823 84.1438 66.9799 83.5296L64.3047 80.2498L67.714 79.5157C68.4248 79.3612 69.1589 79.62 69.6186 80.1821L72.3499 83.5296C72.8521 84.1438 72.9275 85.0014 72.5391 85.6929Z" fill="#8E4D29" />--}}
{{--                                        <path d="M57.7226 74.1209H55.6635C54.8634 74.1209 54.2148 73.4723 54.2148 72.6723C54.2148 71.8722 54.8634 71.2236 55.6635 71.2236H57.7226C58.5227 71.2236 59.1712 71.8722 59.1712 72.6723C59.1712 73.4723 58.5227 74.1209 57.7226 74.1209Z" fill="#C76D3D" />--}}
{{--                                        <path d="M42.2689 83.5101C41.4689 83.5101 40.8203 82.8615 40.8203 82.0615V80.0023C40.8203 79.2021 41.4689 78.5537 42.2689 78.5537C43.069 78.5537 43.7176 79.2023 43.7176 80.0023V82.0615C43.7176 82.8617 43.069 83.5101 42.2689 83.5101Z" fill="#8E4D29" />--}}
{{--                                        <path d="M35.5742 40.9051H33.515C32.715 40.9051 32.0664 40.2565 32.0664 39.4564C32.0664 38.6562 32.715 38.0078 33.515 38.0078H35.5742C36.3742 38.0078 37.0228 38.6564 37.0228 39.4564C37.0228 40.2565 36.3742 40.9051 35.5742 40.9051Z" fill="#C76D3D" />--}}
{{--                                        <path d="M25.5385 34.2735C25.1678 34.2735 24.7971 34.132 24.5142 33.8492C23.9485 33.2835 23.9483 32.3663 24.514 31.8004L25.97 30.3443C26.5358 29.7784 27.4529 29.7786 28.0188 30.3441C28.5845 30.9098 28.5846 31.827 28.0188 32.3929L26.5628 33.849C26.2799 34.132 25.9092 34.2735 25.5385 34.2735Z" fill="#9D552E" />--}}
{{--                                        <path d="M70.9841 58.2986H70.9643C70.1642 58.2986 69.5156 57.6501 69.5156 56.85C69.5156 56.0499 70.1642 55.4014 70.9643 55.4014H70.9841C71.7842 55.4014 72.4328 56.0499 72.4328 56.85C72.4328 57.6501 71.7842 58.2986 70.9841 58.2986Z" fill="#C76D3D" />--}}
{{--                                        <path d="M32.8318 57.4881H32.8119C32.0118 57.4881 31.3633 56.8395 31.3633 56.0394C31.3633 55.2394 32.0118 54.5908 32.8119 54.5908H32.8318C33.6318 54.5908 34.2804 55.2394 34.2804 56.0394C34.2804 56.8395 33.6318 57.4881 32.8318 57.4881Z" fill="#9D552E" />--}}
{{--                                        <path d="M64.3162 73.575H64.2963C63.4962 73.575 62.8477 72.9264 62.8477 72.1264C62.8477 71.3263 63.4962 70.6777 64.2963 70.6777H64.3162C65.1162 70.6777 65.7648 71.3263 65.7648 72.1264C65.7648 72.9264 65.1162 73.575 64.3162 73.575Z" fill="#C76D3D" />--}}
{{--                                        <path d="M18.6794 68.2498H18.6596C17.8595 68.2498 17.2109 67.6012 17.2109 66.8012C17.2109 66.0011 17.8595 65.3525 18.6596 65.3525H18.6794C19.4795 65.3525 20.1281 66.0011 20.1281 66.8012C20.1281 67.6012 19.4795 68.2498 18.6794 68.2498Z" fill="#C76D3D" />--}}
{{--                                        <path d="M46.906 47.8084H46.8861C46.0861 47.8084 45.4375 47.1598 45.4375 46.3598C45.4375 45.5597 46.0861 44.9111 46.8861 44.9111H46.906C47.7061 44.9111 48.3546 45.5597 48.3546 46.3598C48.3546 47.1598 47.7062 47.8084 46.906 47.8084Z" fill="#9D552E" />--}}
{{--                                        <path d="M14.7105 66.4558H14.6908C13.8907 66.4558 13.2422 65.8073 13.2422 65.0072C13.2422 64.2072 13.8907 63.5586 14.6908 63.5586H14.7105C15.5106 63.5586 16.1591 64.2072 16.1591 65.0072C16.1591 65.8073 15.5106 66.4558 14.7105 66.4558Z" fill="#C76D3D" />--}}
{{--                                    </g>--}}
{{--                                    <defs>--}}
{{--                                        <clipPath id="clip0">--}}
{{--                                            <rect width="96" height="96" fill="white" />--}}
{{--                                        </clipPath>--}}
{{--                                    </defs>--}}
{{--                                </svg>--}}
{{--                                <h1 role="main" class="text-2xl font-semibold dark:text-white leading-normal text-center text-gray-800 mt-8">Allow Cookies</h1>--}}
{{--                            </div>--}}
{{--                            <div class="mt">--}}
{{--                                <div>--}}
{{--                                    <p class="mt-3 text-base leading-7 dark:text-gray-300 text-gray-600">We use cookies, including thrid-party cookies, for functional reasons, for satistical analysis, to personalise your experience.</p>--}}
{{--                                </div>--}}

{{--                                <div class="flex justify-center lg:flex-row flex-col flex-col-reverse items-center w-full lg:space-x-4 mt-9">--}}
{{--                                    <button onclick="showMenu(true)" class="w-60 dark:border-white dark:text-white dark:hover:bg-gray-900 sm:w-full mt-4 lg:mt-0 text-base border border-gray-800 leading-4 text-center text-gray-800 py-4 px-8 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 hover:bg-gray-300">Exit</button>--}}
{{--                                    <button class="w-60 sm:w-full dark:bg-white dark:text-gray-800 dark:hover:bg-gray-100 text-base leading-4 border border-gray-800 text-center text-white py-4 px-8 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 bg-gray-800 hover:bg-black">Accept</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <button onclick="showMenu(true)" class="text-gray-800 dark:text-white absolute top-5 md:top-8 right-5 md:right-8 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800" aria-label="close">--}}
{{--                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                    <path d="M18 6L6 18" stroke="currentColor" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />--}}
{{--                                    <path d="M6 6L18 18" stroke="currentColor" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />--}}
{{--                                </svg>--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <!-- Final Cookies -->

            <footer class="items-center justify-center">
            <hr class="mx-auto container bg-gray-200 mt-6" />
            <div class="mx-auto container xl:px-20 lg:px-12 sm:px-6 px-4 px-4 py-12">
                <div class="flex flex-col items-center justify-center">
                    <div>
                        <h4 class="title"> Ponto Caprice </h4>
                    </div>
                    <div class="flex flex-wrap sm:gap-10 gap-8 items-center justify-center mt-8">
                        <a href="javascript:void(0)" class="focus:underline focus:outline-none hover:text-gray-500 text-base cursor-pointer leading-4 text-gray-800 dark:text-gray-400 dark:hover:text-white">About</a>
                        <a href="javascript:void(0)" class="focus:underline focus:outline-none hover:text-gray-500 text-base cursor-pointer leading-4 text-gray-800 dark:text-gray-400 dark:hover:text-white">Contact us</a>
                        <a href="javascript:void(0)" class="focus:underline focus:outline-none hover:text-gray-500 text-base cursor-pointer leading-4 text-gray-800 dark:text-gray-400 dark:hover:text-white">Terms of Service</a>
                        <a href="javascript:void(0)" class="focus:underline focus:outline-none hover:text-gray-500 text-base cursor-pointer leading-4 text-gray-800 dark:text-gray-400 dark:hover:text-white">Privacy Policy</a>
                    </div>
                    <div class="flex items-center gap-x-8 mt-6">
                        <button aria-label="facebook" class="focus:ring-2 focus:ring-offset-2 focus:ring-2 focus:ring-gray-800 focus:outline-none rounded-full">
                            <a href="https://www.facebook.com/DalvaMSignorini/" rel="noopener noreferrer" target="_blank">
                                <svg class="fill-current text-gray-800 dark:text-white hover:text-gray-500" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M21.5 11.0631C21.5 5.26467 16.7984 0.56311 11 0.56311C5.20156 0.56311 0.5 5.26467 0.5 11.0631C0.5 16.3037 4.33906 20.6476 9.35938 21.4361V14.0992H6.69266V11.0631H9.35938V8.74983C9.35938 6.11873 10.9273 4.6642 13.3255 4.6642C14.4744 4.6642 15.6763 4.86952 15.6763 4.86952V7.45373H14.3516C13.048 7.45373 12.6402 8.2628 12.6402 9.09436V11.0631H15.552L15.087 14.0992H12.6406V21.437C17.6609 20.649 21.5 16.3051 21.5 11.0631Z" fill="currentColor" />
                                </svg>
                            </a>
                        </button>
                        <button aria-label="instagram" class="focus:ring-2 focus:ring-offset-2 focus:ring-2 focus:ring-gray-800 focus:outline-none rounded-full">
                            <a href="https://www.instagram.com/pontocaprice/" rel="noopener noreferrer" target="_blank">
                                <svg class="fill-current text-gray-800 dark:text-white hover:text-gray-500" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.2969 12C14.2969 13.2686 13.2686 14.2969 12 14.2969C10.7314 14.2969 9.70312 13.2686 9.70312 12C9.70312 10.7314 10.7314 9.70312 12 9.70312C13.2686 9.70312 14.2969 10.7314 14.2969 12Z" fill="currentColor" />
                                    <path d="M17.3716 7.93616C17.2612 7.63696 17.085 7.36615 16.8561 7.14386C16.6339 6.91498 16.3632 6.73883 16.0638 6.62842C15.821 6.53412 15.4563 6.42188 14.7845 6.3913C14.0577 6.35815 13.8398 6.35101 12 6.35101C10.16 6.35101 9.94208 6.35797 9.21552 6.39111C8.5437 6.42188 8.17877 6.53412 7.93616 6.62842C7.63678 6.73883 7.36597 6.91498 7.14386 7.14386C6.91498 7.36615 6.73883 7.63678 6.62823 7.93616C6.53394 8.17896 6.42169 8.54388 6.39111 9.2157C6.35797 9.94226 6.35083 10.1602 6.35083 12.0002C6.35083 13.84 6.35797 14.0579 6.39111 14.7847C6.42169 15.4565 6.53394 15.8212 6.62823 16.064C6.73883 16.3634 6.91479 16.634 7.14368 16.8563C7.36597 17.0852 7.6366 17.2614 7.93597 17.3718C8.17877 17.4662 8.5437 17.5785 9.21552 17.6091C9.94208 17.6422 10.1598 17.6492 11.9998 17.6492C13.84 17.6492 14.0579 17.6422 14.7843 17.6091C15.4561 17.5785 15.821 17.4662 16.0638 17.3718C16.6648 17.14 17.1398 16.665 17.3716 16.064C17.4659 15.8212 17.5781 15.4565 17.6089 14.7847C17.642 14.0579 17.649 13.84 17.649 12.0002C17.649 10.1602 17.642 9.94226 17.6089 9.2157C17.5783 8.54388 17.4661 8.17896 17.3716 7.93616ZM12 15.5383C10.0457 15.5383 8.46149 13.9543 8.46149 12C8.46149 10.0457 10.0457 8.46167 12 8.46167C13.9541 8.46167 15.5383 10.0457 15.5383 12C15.5383 13.9543 13.9541 15.5383 12 15.5383ZM15.6782 9.14868C15.2216 9.14868 14.8513 8.77844 14.8513 8.32178C14.8513 7.86511 15.2216 7.49487 15.6782 7.49487C16.1349 7.49487 16.5051 7.86511 16.5051 8.32178C16.5049 8.77844 16.1349 9.14868 15.6782 9.14868Z"
                                        fill="currentColor"/>
                                    <path d="M12 0C5.3736 0 0 5.3736 0 12C0 18.6264 5.3736 24 12 24C18.6264 24 24 18.6264 24 12C24 5.3736 18.6264 0 12 0ZM18.8491 14.8409C18.8157 15.5744 18.6991 16.0752 18.5288 16.5135C18.1708 17.4391 17.4391 18.1708 16.5135 18.5288C16.0754 18.6991 15.5744 18.8156 14.8411 18.8491C14.1063 18.8826 13.8715 18.8906 12.0002 18.8906C10.1287 18.8906 9.8941 18.8826 9.15912 18.8491C8.42578 18.8156 7.9248 18.6991 7.48663 18.5288C7.02667 18.3558 6.61029 18.0846 6.26605 17.7339C5.91559 17.3899 5.64441 16.9733 5.47137 16.5135C5.30109 16.0754 5.18445 15.5744 5.15112 14.8411C5.11725 14.1061 5.10938 13.8713 5.10938 12C5.10938 10.1287 5.11725 9.89392 5.15094 9.15912C5.18427 8.4256 5.30072 7.9248 5.47101 7.48645C5.64404 7.02667 5.91541 6.61011 6.26605 6.26605C6.61011 5.91541 7.02667 5.64423 7.48645 5.47119C7.9248 5.3009 8.4256 5.18445 9.15912 5.15094C9.89392 5.11743 10.1287 5.10938 12 5.10938C13.8713 5.10938 14.1061 5.11743 14.8409 5.15112C15.5744 5.18445 16.0752 5.3009 16.5135 5.47101C16.9733 5.64404 17.3899 5.91541 17.7341 6.26605C18.0846 6.61029 18.356 7.02667 18.5288 7.48645C18.6993 7.9248 18.8157 8.4256 18.8492 9.15912C18.8828 9.89392 18.8906 10.1287 18.8906 12C18.8906 13.8713 18.8828 14.1061 18.8491 14.8409Z"
                                        fill="currentColor"/>
                                </svg>
                            </a>
                        </button>
                    </div>
                    <div class="flex items-center mt-6">
                        <p class="text-base leading-4 text-gray-800 dark:text-gray-400">2021 <span class="font-semibold">Ponto Caprice</span></p>
                        <div class="border-l border-gray-800 pl-2 ml-2">
                            <p class="text-base leading-4 text-gray-800 dark:text-gray-400">Inc. All rights reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

            <script>
                function plus() {
                var preValue = document.getElementById("counter").value;
                document.getElementById("counter").value = parseInt(preValue) + 1;
                }

                function minus() {
                var preValue = document.getElementById("counter").value;
                if (parseInt(preValue) != 0) {
                document.getElementById("counter").value = parseInt(preValue) - 1;
                }
                }

                function rotate() {
                document.getElementById("rotateSVG").classList.toggle("rotate-180");
                }
            </script>

            <!-- Modal Cookies-->
{{--            <script>--}}
{{--                let menu = document.getElementById("menu");--}}
{{--                const showMenu = (flag) => {--}}
{{--                    menu.classList.toggle("hidden");--}}
{{--                };--}}
{{--            </script>--}}

            <!-- Modal de Visão dos Produtos -->
            <script>
                function popuphandler(flag,id) {
                    if (flag) {
                        document.getElementById("popup"+id).classList.remove("hidden");
                    } else {
                        document.getElementById("popup"+id).classList.add("hidden");
                    }
                }
            </script>
            <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
            <script>
                function mostrarDados(valor){
                    $("#form_delete").attr("action", "http://localhost:8000/products/"+valor)

                }
            </script>
            <!-- Final Modal de Visão dos Produtos -->

            <!-- Header Fixo -->
            <script type="text/javascript">
                window.addEventListener("scroll", function(){
                    var header = document.querySelector("#header");
                    header.classList.toggle("sticky-header",window.scrollY > 50);
                })
            </script>

<script>
    function dropdownHandler(element) {
        let single = element.getElementsByTagName("ul")[0];
        single.classList.toggle("hidden");
    }
    function MenuHandler(el, val) {
        let MainList = el.parentElement.parentElement.getElementsByTagName("ul")[0];
        let closeIcon = el.parentElement.parentElement.getElementsByClassName("close-m-menu")[0];
        let showIcon = el.parentElement.parentElement.getElementsByClassName("show-m-menu")[0];
        if (val) {
            MainList.classList.remove("hidden");
            el.classList.add("hidden");
            closeIcon.classList.remove("hidden");
        } else {
            showIcon.classList.remove("hidden");
            MainList.classList.add("hidden");
            el.classList.add("hidden");
        }
    }
    // ------------------------------------------------------
    let sideBar = document.getElementById("mobile-nav");
    let menu = document.getElementById("menu");
    let cross = document.getElementById("cross");
    const sidebarHandler = (check) => {
        if (check) {
            sideBar.style.transform = "translateX(0px)";
            menu.classList.add("hidden");
            cross.classList.remove("hidden");
        } else {
            sideBar.style.transform = "translateX(-100%)";
            menu.classList.remove("hidden");
            cross.classList.add("hidden");
        }
    };
    let list = document.getElementById("list");
    let chevrondown = document.getElementById("chevrondown");
    let chevronup = document.getElementById("chevronup");
    const listHandler = (check) => {
        if (check) {
            list.classList.remove("hidden");
            chevrondown.classList.remove("hidden");
            chevronup.classList.add("hidden");
        } else {
            list.classList.add("hidden");
            chevrondown.classList.add("hidden");
            chevronup.classList.remove("hidden");
        }
    };
</script>

    </body>
</html>
