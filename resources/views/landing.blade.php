<x-guest-layout>

    <section class="fixed z-50 justify-center w-full mx-auto bg-white border-b">
        <div class="relative justify-center w-full mx-auto bg-white">
            <div x-data="{ open: false }"
                class="relative flex flex-col w-full max-w-6xl px-8 py-4 mx-auto bg-white md:px-12 md:items-center md:justify-between md:flex-row lg:px-32">
                <div class="flex flex-row items-center justify-between text-gray-900">
                    <a class="inline-flex items-center gap-3 text-xl font-bold tracking-tight text-gray-900 uppercase"
                        href="/">
                        <img src="{{ asset('images/hero.png') }}" alt="logo" class="h-12">
                    </a><button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline"
                        @click="open = !open">
                        <svg class="size-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                            <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <nav :class="{ 'flex': open, 'hidden': !open }"
                    class="flex-col items-center flex-grow hidden gap-6 p-4 px-5 opacity-100 md:px-0 md:pb-0 md:flex md:justify-start md:flex-row lg:p-0 md:mt-0">
                    <a class="py-2 text-xs font-semibold text-gray-900 uppercase hover:text-gray-400 focus:outline-none focus:shadow-none focus:text-gray-900/90 md:ml-auto"
                        href="#merk">Merk </a><a
                        class="py-2 text-xs font-semibold text-gray-900 uppercase hover:text-gray-400 focus:outline-none focus:shadow-none focus:text-gray-900/90"
                        href="#hewan">Hewan </a><a
                        class="py-2 text-xs font-semibold text-gray-900 uppercase hover:text-gray-400 focus:outline-none focus:shadow-none focus:text-gray-900/90"
                        href="#layanan">Layanan </a><a
                        class="py-2 text-xs font-semibold text-gray-900 uppercase hover:text-gray-400 focus:outline-none focus:shadow-none focus:text-gray-900/90"
                        href="#blog">Blog </a><a
                        class="flex items-center justify-center w-auto h-8 px-4 py-2 text-xs font-semibold text-white uppercase transition-all bg-green-600 rounded-full shrink-0 hover:bg-accent-500"
                        href="#_" role="button">Bergabung franchise kami</a>
                </nav>
            </div>
        </div>
    </section>
    <section>
        <div class="relative h-full py-12 mx-auto">
            <div class="lg:text-center pt-12">
                <div
                    class="px-7 lg:px-24 max-w-6xl mx-auto flex flex-col gap-y-10 lg:flex-row items-center gap-x-10 justify-center py-10 lg:py-14 dark:bg-gray-800">
                    <div class="lg:w-[650px] lg:px-5 flex flex-col gap-y-5">
                        <h1
                            class="text-4xl md:text-5xl xl:text-[50px] leading-[1.2] md:max-w-xl md:mx-auto md:text-center lg:text-left lg:mx-0 lg:max-w-full font-extrabold dark:text-white">
                            Selamat Datang Di Toko Hewan Kami
                        </h1>
                        <p
                            class="text-sm md:max-w-xl md:mx-auto lg:mx-0 lg:max-w-full md:text-center lg:text-left dark:text-gray-300">
                            Kami menyediakan berbagai macam kebutuhan hewan peliharaan Anda
                        </p>
                        <div class="flex gap-x-5 flex-col gap-y-2.5 lg:flex-row">
                            <a href="#"
                                class="flex w-full lg:w-fit items-center text-white justify-center rounded-lg bg-green-600 px-6 py-2.5 font-semibold hover:shadow-lg hover:drop-shadow transition duration-200">
                                <span>
                                    Mulai belanja
                                </span>
                            </a>
                            <a href="#"
                                class="flex w-full lg:w-fit items-center text-green-600 justify-center rounded-lg border border-green-500 px-6 py-2.5 font-semibold hover:shadow-lg hover:drop-shadow transition duration-200 bg-green-50 dark:text-white dark:bg-transparent dark:border-gray-500/50">
                                <span>
                                    Hubungi kami
                                </span>
                            </a>
                        </div>
                    </div>
                    <div
                        class="hero-image md:px-5 lg:px-0 w-full lg:w-1/2 rounded-3xl md:pt-2 lg:pt-0 relative isolate z-10">
                        <img class="rounded-3xl w-full" src="{{ asset('images/hero.png') }}" alt="">
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section>
        <div class="h-full max-w-6xl px-8 pb-12 mx-auto md:px-12 lg:px-32">
            <div class="px-6 mx-auto max-w-6xl lg:px-8">
                <div class="text-center">
                    <h2 class="text-4xl font-semibold tracking-tighter text-gray-900 lg:text-4xl">
                        Layanan Kami
                    </h2>
                    <p class="max-w-xs mx-auto mt-4 text-sm text-gray-500">
                        Menyesuaikan kebutuhan hewan peliharaan Anda
                    </p>
                </div>
                <div
                    class="grid items-center max-w-lg grid-cols-4 mx-auto mt-20 gap-x-8 gap-y-10 sm:max-w-xl sm:gap-x-10 lg:mx-0 lg:max-w-none">
                    <div class="space-y-3 text-center">
                        <img class="service-item w-44 rounded-full object-cover h-44 col-span-2 lg:col-span-1"
                            src="https://images.unsplash.com/photo-1634190988693-3573885c4e97?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTR8fHNob3BwaW5nJTIwY2F0fGVufDB8fDB8fHww"
                            alt="#_">
                        <h1 class="font-medium">Toko</h1>
                    </div>
                    <div class="space-y-3 text-center">
                        <img class="service-item w-44 rounded-full object-cover h-44 col-span-2 lg:col-span-1"
                            src="https://images.unsplash.com/photo-1625321171045-1fea4ac688e9?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8Z3Jvb21pbmd8ZW58MHx8MHx8fDA%3D"
                            alt="#_">
                        <h1 class="font-medium">Grooming</h1>
                    </div>
                    <div class="space-y-3 text-center">
                        <img class="service-item w-44 rounded-full object-cover h-44 col-span-2 lg:col-span-1"
                            src="https://plus.unsplash.com/premium_photo-1677165478400-c45a9ecd429e?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8Y2xpbmljJTIwaGV3YW58ZW58MHx8MHx8fDA%3D"
                            alt="3">
                        <h1 class="font-medium">Klinik</h1>
                    </div>
                    <div class="space-y-3 text-center">
                        <img class="service-item w-44 rounded-full object-cover h-44 col-span-2 sm:col-start-2 lg:col-span-1"
                            src="https://media.istockphoto.com/id/944635170/photo/golden-retriever-puppy-dog-with-toy-on-bed-in-house-or-hotel-scandi-styled-with-green-plants.webp?b=1&s=170667a&w=0&k=20&c=v2qYQ19H9GjIdpBC3_ludjn32ELJBZHoZ707Fw-a14k="
                            alt="#_">
                        <h1 class="font-medium">Penitipan</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="scroll-mt-24 o" id="pricing">
        <div class="h-full max-w-6xl px-8 py-24 mx-auto md:px-12 lg:px-32">
            <div class="text-center">
                <h2 class="text-4xl font-semibold tracking-tighter text-gray-900 lg:text-4xl">
                    Daftar Harga
                </h2>
                <p class="max-w-xs mx-auto mt-4 text-sm text-gray-500">
                    Jelajahi paket yang kami tawarkan untuk memenuhi kebutuhan Anda
                </p>
            </div>
            <div class="grid grid-cols-1 gap-2 mt-24 lg:grid-cols-3">
                <div class="flex flex-col justify-between h-full gap-8 p-8 bg-gray-100 rounded-xl">
                    <div>
                        <h3 class="text-base font-medium tracking-tight text-gray-900 mb-4">
                            Paket Silver - Rp100.000
                        </h3>
                        <ul class="max-w-md space-y-1 text-gray-500 list-disc list-inside dark:text-gray-400">
                            <li>
                                Mandi sampo hipoalergenik
                            </li>
                            <li>
                                Pembersihan telinga & kuku
                            </li>
                            <li>
                                Penyisiran bulu
                            </li>
                            <li>
                                Pengeringan kilat
                            </li>
                        </ul>
                    </div>
                    <a class="flex items-center justify-center w-auto h-10 px-4 py-2 text-sm font-semibold text-gray-900 transition-all bg-white rounded-full shrink-0 hover:bg-green-500 hover:text-white"
                        href="/contact">Mulai Berlangganan</a>
                </div>
                <div class="flex flex-col justify-between h-full gap-8 p-8 bg-green-600 rounded-xl">
                    <div>
                        <h3 class="text-base font-medium tracking-tight text-white mb-4">
                            Paket Gold - Rp.200.000
                        </h3>
                        <ul class="max-w-md space-y-1 text-white list-disc list-inside">
                            <li>
                                Semua layanan paket Silver
                            </li>
                            <li>
                                Grooming sesuai ras
                            </li>
                            <li>
                                Potong bulu by request
                            </li>

                        </ul>
                    </div>
                    <a class="flex items-center justify-center w-auto h-10 px-4 py-2 text-sm font-semibold text-gray-900 transition-all bg-white rounded-full shrink-0 hover:bg-green-500 hover:text-white"
                        href="/start">Mulai Berlangganan</a>
                </div>
                <div class="flex flex-col justify-between h-full gap-8 p-8 bg-gray-100 rounded-xl">
                    <div>
                        <h3 class="text-base font-medium tracking-tight text-gray-900 mb-4">
                            Paket Platinum - Rp.300.000
                        </h3>
                        <ul class="max-w-md space-y-1 text-gray-500 list-disc list-inside dark:text-gray-400">
                            <li>
                                Semua layanan paket Gold
                            </li>
                            <li>
                                Pilihan makanan premium
                            </li>
                            <li>
                                Layanan sesuai kebutuhan
                            </li>

                        </ul>
                    </div>
                    <a class="flex items-center justify-center w-auto h-10 px-4 py-2 text-sm font-semibold text-gray-900 transition-all bg-white rounded-full shrink-0 hover:bg-green-500 hover:text-white"
                        href="/contact">Hubungi Kami</a>
                </div>
            </div>
        </div>
    </section>

    <section class="scroll-mt-24" id="faq">
        <div class="h-full max-w-6xl px-8 py-24 mx-auto md:px-12 lg:px-32">
            <div class="grid grid-cols-1 gap-12 lg:grid-cols-3">
                <div>
                    <p class="text-4xl font-semibold tracking-tighter text-gray-900 lg:text-6xl">
                        FAQ
                    </p>
                    <p class="max-w-xs mx-auto mt-4 text-sm text-gray-500">
                        Temukan jawaban atas pertanyaan umum yang sering diajukan
                    </p>
                </div>
                <div class="flex flex-col gap-6 text-base text-gray-400 lg:col-span-2">
                    <details>
                        <summary class="text-base font-medium tracking-tight text-gray-900">
                            Bagaimana cara memesan layanan di petshop ini?
                        </summary>
                        <p class="pt-4 text-sm text-gray-500">
                            Untuk memesan layanan di petshop kami, Anda dapat mengunjungi website kami dan memilih
                            layanan yang Anda inginkan dari menu yang tersedia. Setelah itu, ikuti langkah-langkah yang
                            tertera untuk menyelesaikan proses pemesanan.
                        </p>
                    </details>
                    <details>
                        <summary class="text-base font-medium tracking-tight text-gray-900">
                            Apakah ada biaya tambahan untuk grooming hewan peliharaan?
                        </summary>
                        <p class="pt-4 text-sm text-gray-500">
                            Ya, biaya grooming dapat bervariasi tergantung pada ukuran dan jenis hewan peliharaan Anda.
                            Silakan hubungi kami untuk informasi lebih lanjut atau lihat halaman layanan kami untuk
                            detail harga.
                        </p>
                    </details>
                    <details>
                        <summary class="text-base font-medium tracking-tight text-gray-900">
                            Berapa lama waktu yang dibutuhkan untuk proses grooming?
                        </summary>
                        <p class="pt-4 text-sm text-gray-500">
                            Waktu yang dibutuhkan untuk proses grooming tergantung pada jenis layanan yang Anda pilih
                            dan kondisi bulu hewan peliharaan Anda. Biasanya, proses grooming dapat memakan waktu antara
                            1-3 jam.
                        </p>
                    </details>
                    <details>
                        <summary class="text-base font-medium tracking-tight text-gray-900">
                            Apakah petshop ini menyediakan layanan vaksinasi untuk hewan peliharaan?
                        </summary>
                        <p class="pt-4 text-sm text-gray-500">
                            Ya, kami menyediakan layanan vaksinasi untuk hewan peliharaan. Silakan hubungi kami untuk
                            jadwal vaksinasi dan informasi lebih lanjut mengenai jenis vaksin yang tersedia.
                        </p>
                    </details>
                    <details>
                        <summary class="text-base font-medium tracking-tight text-gray-900">
                            Bagaimana cara menghubungi layanan pelanggan?
                        </summary>
                        <p class="pt-4 text-sm text-gray-500">
                            Anda dapat menghubungi tim layanan pelanggan kami melalui email di info@petshop.com atau
                            melalui telepon di (021) 1234-5678. Kami siap membantu Anda dengan pertanyaan atau kebutuhan
                            Anda terkait dengan layanan kami.
                        </p>
                    </details>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="h-full max-w-6xl px-8 py-24 mx-auto md:px-12 lg:px-32">
            <div class="pt-12 border-t">
                <div class="border-gray-900 xl:grid xl:grid-cols-3 xl:gap-8">
                    <div class="text-black">
                        <div class="inline-flex items-center gap-3">
                            <p class="text-2xl font-bold uppercase">Toko Hewan</p>
                        </div>
                        <p class="mt-2 text-sm text-gray-500 lg:w-4/5">
                            Layanan terbaik di Indonesia
                        </p>
                    </div>
                    <div class="grid grid-cols-2 gap-8 mt-12 lg:grid-cols-3 lg:mt-0 xl:col-span-2">
                        <div>
                            <h3 class="text-black">Informasi</h3>
                            <ul role="list" class="mt-4 space-y-2">
                                <li>
                                    <a href="#_" class="text-sm text-gray-500 hover:text-black">
                                        Layanan
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="text-black">Medsos</h3>
                            <ul role="list" class="mt-4 space-y-2">
                                <li>
                                    <a href="https://twitter.com/lexingtonthemes"
                                        class="text-sm text-gray-500 hover:text-black">
                                        @petshoparif
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/Mike_Andreuzza"
                                        class="text-sm text-gray-500 hover:text-black">
                                        @ibnu
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-12 md:mt-0">
                            <h3 class="text-black">Alamat</h3>
                            <ul role="list" class="mt-4 space-y-2">
                                <li>
                                    <a href="https://lexingtonthemes.com/"
                                        class="text-sm text-gray-500 hover:text-black">
                                        Jl. Jend. Sudirman No. 123, Jakarta
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col pt-12 md:flex-row md:items-center md:justify-between">
                    <p class="text-left">
                        <span class="mx-auto mt-2 text-sm text-gray-500 lg:mx-0">
                            © 2021 Toko Hewan. All rights reserved.
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </footer>
</x-guest-layout>
