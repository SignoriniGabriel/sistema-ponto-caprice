{{--<x-guest-layout>--}}
{{--    <x-auth-card>--}}
{{--        <x-slot name="logo">--}}
{{--            <a href="/">--}}
{{--                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />--}}
{{--            </a>--}}
{{--        </x-slot>--}}

{{--        <!-- Validation Errors -->--}}
{{--        <x-auth-validation-errors class="mb-4" :errors="$errors" />--}}

{{--        <form method="POST" action="{{ route('register') }}">--}}
{{--            @csrf--}}

{{--            <!-- Name -->--}}
{{--            <div>--}}
{{--                <x-label for="name" :value="__('Name')" />--}}

{{--                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />--}}
{{--            </div>--}}

{{--            <!-- Email Address -->--}}
{{--            <div class="mt-4">--}}
{{--                <x-label for="email" :value="__('Email')" />--}}

{{--                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />--}}
{{--            </div>--}}

{{--            <div class="mt-4">--}}
{{--                <x-label for="role" :value="__('Role')" />--}}
{{--                <select name="role" id="role" class="block mt-1 w-full">--}}
{{--                    <option value="Administrador">Administrador</option>--}}
{{--                    <option value="Cliente">Cliente</option>--}}
{{--                </select>--}}
{{--            </div>--}}

{{--            <!-- Password -->--}}
{{--            <div class="mt-4">--}}
{{--                <x-label for="password" :value="__('Password')" />--}}

{{--                <x-input id="password" class="block mt-1 w-full"--}}
{{--                                type="password"--}}
{{--                                name="password"--}}
{{--                                required autocomplete="new-password" />--}}
{{--            </div>--}}

{{--            <!-- Confirm Password -->--}}
{{--            <div class="mt-4">--}}
{{--                <x-label for="password_confirmation" :value="__('Confirm Password')" />--}}

{{--                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />--}}
{{--            </div>--}}

{{--            <div class="flex items-center justify-end mt-4">--}}
{{--                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">--}}
{{--                    {{ __('Already registered?') }}--}}
{{--                </a>--}}

{{--                <x-button class="ml-4">--}}
{{--                    {{ __('Register') }}--}}
{{--                </x-button>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </x-auth-card>--}}
{{--    <section class="py-20 bg-gray-100 overflow-x-hidden">--}}
{{--        <div class="relative container px-4 mx-auto">--}}
{{--            <div class="relative max-w-4xl mx-auto">--}}
{{--                <div class="absolute inset-0 teste my-24 -ml-4 -mr-4"></div>--}}
{{--                <div class="relative py-16 md:pt-12 md:pb-12 px-4 sm:px-8 bg-white">--}}
{{--                    <div class="max-w-lg mx-auto text-center">--}}
{{--                        <a class="inline-block mb-8 text-3xl font-bold font-heading" href="#">--}}
{{--                            <img src="{{url('storage/assets/logo/logoRosaPC.png')}}">--}}
{{--                        </a>--}}
{{--                        <h3 class="mb-8 text-4xl md:text-5xl font-bold font-heading">Crie uma Nova Conta</h3>--}}
{{--                        --}}{{--                        <p class="mb-10 font-semibold font-heading">Please, do not hesitate</p>--}}

{{--                        <!-- Validation Errors -->--}}
{{--                        <x-auth-validation-errors class="mb-4" :errors="$errors" />--}}

{{--                        <form method="POST" action="{{ route('register') }}">--}}
{{--                            @csrf--}}
{{--                                <!-- Name -->--}}
{{--                                <input class="w-full mb-4 px-12 py-5 border border-gray-200 focus:ring-pink-100 focus:border-pink-100 rounded-md" id="name" type="text" name="name" placeholder="Nome" required autofocus >--}}
{{--                                <!-- Email Address -->--}}
{{--                                <input class="w-full mb-4 px-12 py-5 border border-gray-200 focus:ring-pink-100 focus:border-pink-100 rounded-md" id="email" type="email" name="email" placeholder="E-mail" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;">--}}
{{--                                <!-- Role -->--}}
{{--                                <select  name="role" id="role" class="w-full mb-4 px-12 py-5 border border-gray-200 focus:ring-pink-100 focus:border-pink-100 rounded-md">--}}
{{--                                    <option selected disabled value="">Acesso</option>--}}
{{--                                    <option value="Administrador">Administrador</option>--}}
{{--                                    <option value="Cliente">Cliente</option>--}}
{{--                                </select>--}}
{{--                                <!-- Password -->--}}
{{--                                <input class="w-full mb-4 px-12 py-5 border border-gray-200 focus:ring-blue-300 focus:border-blue-300 rounded-md" id="password" name="password" required autocomplete="new-password" type="password" placeholder="Senha" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAACIUlEQVQ4EX2TOYhTURSG87IMihDsjGghBhFBmHFDHLWwSqcikk4RRKJgk0KL7C8bMpWpZtIqNkEUl1ZCgs0wOo0SxiLMDApWlgOPrH7/5b2QkYwX7jvn/uc//zl3edZ4PPbNGvF4fC4ajR5VrNvt/mo0Gr1ZPOtfgWw2e9Lv9+chX7cs64CS4Oxg3o9GI7tUKv0Q5o1dAiTfCgQCLwnOkfQOu+oSLyJ2A783HA7vIPLGxX0TgVwud4HKn0nc7Pf7N6vV6oZHkkX8FPG3uMfgXC0Wi2vCg/poUKGGcagQI3k7k8mcp5slcGswGDwpl8tfwGJg3xB6Dvey8vz6oH4C3iXcFYjbwiDeo1KafafkC3NjK7iL5ESFGQEUF7Sg+ifZdDp9GnMF/KGmfBdT2HCwZ7TwtrBPC7rQaav6Iv48rqZwg+F+p8hOMBj0IbxfMdMBrW5pAVGV/ztINByENkU0t5BIJEKRSOQ3Aj+Z57iFs1R5NK3EQS6HQqF1zmQdzpFWq3W42WwOTAf1er1PF2USFlC+qxMvFAr3HcexWX+QX6lUvsKpkTyPSEXJkw6MQ4S38Ljdbi8rmM/nY+CvgNcQqdH6U/xrYK9t244jZv6ByUOSiDdIfgBZ12U6dHEHu9TpdIr8F0OP692CtzaW/a6y3y0Wx5kbFHvGuXzkgf0xhKnPzA4UTyaTB8Ph8AvcHi3fnsrZ7Wore02YViqVOrRXXPhfqP8j6MYlawoAAAAASUVORK5CYII=&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">--}}
{{--                                <input class="w-full mb-10 px-12 py-5 border border-gray-200 focus:ring-blue-300 focus:border-blue-300 rounded-md" id="password_confirmation" name="password_confirmation" type="password" placeholder="Confirmar Senha" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAACIUlEQVQ4EX2TOYhTURSG87IMihDsjGghBhFBmHFDHLWwSqcikk4RRKJgk0KL7C8bMpWpZtIqNkEUl1ZCgs0wOo0SxiLMDApWlgOPrH7/5b2QkYwX7jvn/uc//zl3edZ4PPbNGvF4fC4ajR5VrNvt/mo0Gr1ZPOtfgWw2e9Lv9+chX7cs64CS4Oxg3o9GI7tUKv0Q5o1dAiTfCgQCLwnOkfQOu+oSLyJ2A783HA7vIPLGxX0TgVwud4HKn0nc7Pf7N6vV6oZHkkX8FPG3uMfgXC0Wi2vCg/poUKGGcagQI3k7k8mcp5slcGswGDwpl8tfwGJg3xB6Dvey8vz6oH4C3iXcFYjbwiDeo1KafafkC3NjK7iL5ESFGQEUF7Sg+ifZdDp9GnMF/KGmfBdT2HCwZ7TwtrBPC7rQaav6Iv48rqZwg+F+p8hOMBj0IbxfMdMBrW5pAVGV/ztINByENkU0t5BIJEKRSOQ3Aj+Z57iFs1R5NK3EQS6HQqF1zmQdzpFWq3W42WwOTAf1er1PF2USFlC+qxMvFAr3HcexWX+QX6lUvsKpkTyPSEXJkw6MQ4S38Ljdbi8rmM/nY+CvgNcQqdH6U/xrYK9t244jZv6ByUOSiDdIfgBZ12U6dHEHu9TpdIr8F0OP692CtzaW/a6y3y0Wx5kbFHvGuXzkgf0xhKnPzA4UTyaTB8Ph8AvcHi3fnsrZ7Wore02YViqVOrRXXPhfqP8j6MYlawoAAAAASUVORK5CYII=&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;">--}}
{{--                                <label class="flex" for="">--}}
{{--                                    <input class="mr-4 ml-1 focus:ring-pink-100 h-4 w-4 text-pink-300 border-gray-300 rounded" type="checkbox">--}}
{{--                                    <span class="text-sm">By singning up, you agree to our  <a class="font-bold hover:underline" href="#">Terms, Data Policy</a> and <a class="font-bold hover:underline" href="#">Cookies Policy</a>.</span>--}}
{{--                                </label>--}}
{{--                                <button class="mt-12 md:mt-12 bg-blue-800 hover:bg-blue-900 text-white font-bold font-heading py-5 px-8 rounded-md uppercase">{{ __('Register') }}</button>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--</x-guest-layout>--}}
<x-admin-layout>
    <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
        <div class="mx-auto w-5/6">
            <h1 class="mb-6 text-gray-700 dark:text-gray-200 text-center title-login">
                Register
            </h1>

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{ route('register') }}">
            @csrf
            <!-- Name -->
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400 text-login">Your full name</span>
                    <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                           id="name" type="text" name="name" placeholder="" required autofocus/>
                </label>
                <!-- Email Address -->
                <label class="block mt-6 text-sm">
                    <span class="text-gray-700 dark:text-gray-400 text-login">Your email address</span>
                    <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                           id="email" type="email" name="email" placeholder=""/>
                </label>
            {{--                            <!-- Role -->--}}
            {{--                            <label class="block mt-4 text-sm">--}}
            {{--                                <span class="text-gray-700 dark:text-gray-400">Role</span>--}}
            {{--                                <select  name="role" id="role" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">--}}
            {{--                                    <option selected disabled value="">Acesso</option>--}}
            {{--                                    <option value="Administrador">Administrador</option>--}}
            {{--                                    <option value="Cliente">Cliente</option>--}}
            {{--                                </select>--}}
            {{--                            </label>--}}
            <!-- Password -->
                <label class="block mt-6 text-sm">
                    <span class="text-gray-700 dark:text-gray-400 text-login">Create your password</span>
                    <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                           id="password" name="password" required autocomplete="new-password" type="password" placeholder=""/>
                </label>
                <label class="block mt-6 text-sm">
                    <span class="text-gray-700 dark:text-gray-400 text-login">Confirm your password</span>
                    <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                           id="password_confirmation" name="password_confirmation" type="password" placeholder=""/>
                </label>

            {{--                            <div class="flex mt-6 text-sm">--}}
            {{--                                <label class="flex items-center dark:text-gray-400">--}}
            {{--                                    <input type="checkbox" class="text-purple-600 form-checkbox focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"/>--}}
            {{--                                    <span class="ml-2">I agree to the <span class=""><a class="font-bold hover:underline" href="#">Terms, Data Policy</a> and <a class="font-bold hover:underline" href="#">Cookies Policy</a>.</span>--}}
            {{--                                    </span>--}}
            {{--                                </label>--}}
            {{--                            </div>--}}

            <!-- You should use a button here, as the anchor is only used for the example  -->
                <button class="botao-login block w-2/5 px-4 py-2 mt-8 leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                    {{ __('Register') }}
                </button>
            </form>

        </div>
    </div>
</x-admin-layout>

