<x-guest-layout>
    <div class="flex flex-col overflow-y-auto md:flex-row" style="background-color: #1E535A; ">
        <div class="h-32 md:h-auto md:w-1/2">
            <img aria-hidden="true" class="object-cover w-full h-full"
                 src="{{ asset('images/5124556.jpg') }}"
                 alt="Office"/>
        </div>
        <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2" >
            <div class="w-full max-w-md">
                <h1 class="mb-4 text-3xl font-bold text-center text-white">
                    Welcome Back!
                </h1>
        
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Input[type="email"] -->
                    <div class="mt-4">
                        <x-input-label :value="__('Email Address')" class="text-white"/>
                        <x-text-input type="email"
                                      id="email"
                                      name="email"
                                      value="{{ old('email') }}"
                                      class="block w-full"
                                      required
                                      autofocus/>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Input[type="password"] -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" class="text-white"/>
                        <x-text-input type="password"
                                      id="password"
                                      name="password"
                                      class="block w-full"/>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="flex items-center mt-4" >
                        <label class="flex items-center dark:text-gray-400">
                            <input type="checkbox"
                                   name="remember"
                                   class="text-complementary-600 focus:border-complementary-400 focus:outline-none focus:shadow-outline-complementary">
                            <span class="ml-2 text-white">{{ __('Remember me') }}</span>
                        </label>
                        <!-- <a class="ml-auto text-sm font-medium text-white hover:underline"
                           href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a> -->
                    </div>

                    <div class="mt-6">
                        <x-primary-button class="block w-full bg-complementary-600 hover:bg-complementary-700" style="background-color: #1B83FE;">
                            {{ __('Log in') }}
                        </x-primary-button>
                    </div>
                </form>

                <p class="mt-8 text-sm text-center text-white">
                    {{ __("Don't have an account?") }}
                    <a class="text-complementary-600 hover:underline" href="{{ route('register') }}">
                        {{ __('Register') }}
                    </a>
                </p>

            </div>
        </div>
    </div>
</x-guest-layout>