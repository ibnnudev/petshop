<section class="fixed z-50 justify-center w-full mx-auto bg-white border-b">
    <div class="relative justify-center w-full mx-auto bg-white">
        <div x-data="{ open: false }"
            class="relative flex flex-col w-full max-w-6xl px-8 py-4 mx-auto bg-white md:px-12 md:items-center md:justify-between md:flex-row lg:px-32">
            <div class="flex flex-row items-center justify-between text-gray-900">
                <a class="inline-flex items-center gap-3 text-xl font-bold tracking-tight text-gray-900 uppercase"
                    href="/">
                    <img src="{{ asset('images/hero.png') }}" alt="logo" class="h-12">
                </a><button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
                    <svg class="size-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                        </path>
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <nav :class="{ 'flex': open, 'hidden': !open }"
                class="flex-col items-center flex-grow hidden gap-6 p-4 px-5 opacity-100 md:px-0 md:pb-0 md:flex md:justify-start md:flex-row lg:p-0 md:mt-0">
                <a class="py-2 text-xs font-semibold text-gray-900 uppercase hover:text-gray-400 focus:outline-none focus:shadow-none focus:text-gray-900/90 md:ml-auto"
                    href="{{ route('merk.index') }}">Merk </a><a
                    class="py-2 text-xs font-semibold text-gray-900 uppercase hover:text-gray-400 focus:outline-none focus:shadow-none focus:text-gray-900/90"
                    href="#hewan">Hewan </a><a
                    class="py-2 text-xs font-semibold text-gray-900 uppercase hover:text-gray-400 focus:outline-none focus:shadow-none focus:text-gray-900/90"
                    href="#layanan">Layanan </a><a
                    class="py-2 text-xs font-semibold text-gray-900 uppercase hover:text-gray-400 focus:outline-none focus:shadow-none focus:text-gray-900/90"
                    href="{{ route('blog.index') }}">Blog </a><a
                    class="flex items-center justify-center w-auto h-8 px-4 py-2 text-xs font-semibold text-white uppercase transition-all bg-green-600 rounded-full shrink-0 hover:bg-accent-500"
                    href="#_" role="button">Bergabung franchise kami</a>
            </nav>
        </div>
    </div>
</section>
<section>
