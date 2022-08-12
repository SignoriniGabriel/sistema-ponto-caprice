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
