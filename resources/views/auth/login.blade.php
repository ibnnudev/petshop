<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />


    <section>
        <div class="relative flex justify-center max-h-full overflow-hidden lg:px-0 md:px-12">
            <div
                class="relative z-10 flex flex-col flex-1 px-4 py-10 bg-white lg:border-r lg:py-24 md:flex-none md:px-28 sm:justify-center">
                <div class="w-full max-w-md mx-auto md:max-w-sm md:px-0 md:w-96 sm:px-4">
                    <div class="flex flex-col">
                        <h1 class="text-3xl font-semibold tracking-tighter text-gray-900">
                            Collaborating on single-page projects,
                            <span class="text-gray-600">from any location</span>
                        </h1>
                        <p class="mt-4 text-base font-medium text-gray-500">
                            A rapid approach to collaborate in staging and provisional settings.
                        </p>
                    </div>
                    <div class="mt-8">
                        <button
                            class="inline-flex items-center justify-center w-full h-12 gap-3 px-5 py-3 font-medium duration-200 bg-gray-100 rounded-xl hover:bg-gray-200 focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                            type="button" aria-label="Sign in with Google">
                            <ion-icon name="logo-google" role="img" class="md hydrated"
                                aria-label="logo google"></ion-icon>

                            <span>Masuk dengan Google</span>
                        </button>

                        <div class="relative py-3">
                            <div class="absolute inset-0 flex items-center" aria-hidden="true">
                                <div class="w-full border-t border-gray-300"></div>
                            </div>
                            <div class="relative flex justify-center">
                                <span class="px-2 text-sm text-black bg-white">Atau lanjutkan dengan</span>
                            </div>
                        </div>
                    </div>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="space-y-3">
                            <div>
                                <label for="email" class="block mb-3 text-sm font-medium text-black">
                                    Email
                                </label>
                                <input type="text" id="email" name="email"
                                    class="block w-full h-12 px-4 py-2 text-blue-500 duration-200 border rounded-lg appearance-none bg-chalk border-zinc-300 placeholder-zinc-300 focus:border-zinc-300 focus:outline-none focus:ring-zinc-300 sm:text-sm">
                            </div>
                            <div class="col-span-full">
                                <label for="password" class="block mb-3 text-sm font-medium text-black">
                                    Password
                                </label>
                                <input id="password" name="password"
                                    class="block w-full h-12 px-4 py-2 text-blue-500 duration-200 border rounded-lg appearance-none bg-chalk border-zinc-300 placeholder-zinc-300 focus:border-zinc-300 focus:outline-none focus:ring-zinc-300 sm:text-sm"
                                    placeholder="Type password here..." type="password">
                            </div>

                            <div class="col-span-full">
                                <button type="submit"
                                    class="inline-flex items-center justify-center w-full h-12 gap-3 px-5 py-3 font-medium text-white duration-200 bg-blue-600 rounded-xl hover:bg-blue-700 focus:ring-2 focus:ring-offset-2 focus:ring-black">
                                    Masuk
                                </button>
                            </div>
                        </div>
                        <div class="mt-6">
                            <p class="flex mx-auto text-sm font-medium leading-tight text-center text-black">
                                Belum punya akun?
                                <a class="ml-auto text-blue-500 hover:text-black" href="{{ route('register') }}">
                                    Daftar sekarang
                                </a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
            <div class="hidden bg-white lg:block lg:flex-1 lg:relative sm:contents">
                <div class="absolute inset-0 object-cover w-full h-full bg-white" alt="" width="1664">
                    <img class="object-cover object-center w-full h-full bg-gray-200"
                        src="https://images.unsplash.com/photo-1597843786411-a7fa8ad44a95?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="">
                </div>
            </div>
        </div>
    </section>

</x-guest-layout>
