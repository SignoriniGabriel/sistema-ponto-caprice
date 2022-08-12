<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="data()">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Ponto Caprice Atelier</title>

    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/personal.css')}}" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="{{asset('js/init-alpine.js')}}"></script>
    <script src="{{asset('js/focus-trap.js')}}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" defer></script>

    <style>

    </style>

</head>
    <body class="bg-white text-gray-600 work-sans leading-normal text-base tracking-normal">

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
                <button id="nav-toggle" class="flex items-center p-1 text-pink-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                    </svg>
                </button>
            </div>
            <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 lg:bg-transparent text-black p-4 lg:p-0 z-20 bg-gray-100" id="nav-content">
                <ul class="list-reset lg:flex justify-end flex-1 items-center roboto">
                    <li class="mr-3">
                        <a class="inline-block py-2 px-4 text-black font-bold no-underline" href="{{route('home')}}">{{ __('Shop')}}</a>
                    </li>
{{--                    <li class="mr-3">--}}
{{--                        <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="/about">{{ __('About Us')}}</a>--}}
{{--                    </li>--}}
{{--                    <li class="mr-3">--}}
{{--                        <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="/contact">{{ __('Contact')}}</a>--}}
{{--                    </li>--}}
                    <li class="mr-3">
                    @if (Route::has('login'))
                        @auth
                            <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="{{route('logout')}}" onclick="event.preventDefault();this.closest('form').submit();">
                                        {{ __('Log out') }}
                                    </a>
                                </form>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="{{ route('suggestions.create') }}">{{ __('Suggestion')}}</a>
                        @else
                            <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="{{ route('login') }}">{{ __('Login')}}</a>
                        @endauth
                        @endif
                    </li>
                    <li class="mr-3">
                        <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="{{ route('sale.index') }}">{{ __('Bag') }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="antialiased">
        {{ $slot }}
    </div>

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

    <!-- Header Fixo -->
    <script type="text/javascript">
        window.addEventListener("scroll", function(){
            var header = document.querySelector("#header");
            header.classList.toggle("sticky-header",window.scrollY > 50);
        })
    </script>

    <script>
        var Alert = document.getElementById("alert");
        var close = document.getElementById("close-modal");
        function closeAlert() {
            Alert.classList.add("hidden");
            Alert.style.transform = "translateY(-200%)";
            setTimeout(function () {
                Alert.style.transform = "translateY(0%)";
            }, 1000);
        }
    </script>

    </body>
</html>
