<x-guest-layout>

    <section class="fixed z-50 justify-center w-full mx-auto bg-white border-b">
        <div class="relative justify-center w-full mx-auto bg-white">
            <div x-data="{ open: false }"
                class="relative flex flex-col w-full max-w-6xl px-8 py-4 mx-auto bg-white md:px-12 md:items-center md:justify-between md:flex-row lg:px-32">
                <div class="flex flex-row items-center justify-between text-gray-900">
                    <a class="inline-flex items-center gap-3 text-xl font-bold tracking-tight text-gray-900 uppercase"
                        href="/">Toko Hewan</a><button
                        class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
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
                        class="flex items-center justify-center w-auto h-8 px-4 py-2 text-xs font-semibold text-white uppercase transition-all bg-black rounded-full shrink-0 hover:bg-accent-500"
                        href="#_" role="button">Bergabung franchise kami</a>
                </nav>
            </div>
        </div>
    </section>
    <section>
        <div class="relative h-full py-12 mx-auto">
            <div class=" lg:text-center">
<section class="bg-center bg-no-repeat bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/conference.jpg')] bg-gray-700 bg-blend-multiply">
    <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">We invest in the world’s potential</h1>
        <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">Here at Flowbite we focus on markets where technology, innovation, and capital can unlock long-term value and drive economic growth.</p>
        <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
            <a href="#" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                Get started
                <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
            <a href="#" class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                Learn more
            </a>
        </div>
    </div>
</section>
            </div>
        </div>
    </section>
    <section>
        <div class="h-full max-w-6xl px-8 pb-12 mx-auto md:px-12 lg:px-32">
            <div class="px-6 mx-auto max-w-7xl lg:px-8">
                <h2 class="text-lg font-semibold leading-8 text-center text-gray-900">
                    Happy companies around the world.
                </h2>
                <div
                    class="grid items-center max-w-lg grid-cols-4 mx-auto mt-10 gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-5">
                    <img class="object-contain w-full col-span-2 max-h-12 lg:col-span-1" src="./images/logos/8.svg"
                        alt="#_" width="158" height="48"><img
                        class="object-contain w-full col-span-2 max-h-12 lg:col-span-1" src="./images/logos/2.svg"
                        alt="#_" width="158" height="48"><img
                        class="object-contain w-full col-span-2 max-h-12 lg:col-span-1" src="./images/logos/3.svg"
                        alt="3" width="158" height="48"><img
                        class="object-contain w-full col-span-2 max-h-12 sm:col-start-2 lg:col-span-1"
                        src="./images/logos/4.svg" alt="#_" width="158" height="48"><img
                        class="object-contain w-full col-span-2 col-start-2 max-h-12 sm:col-start-auto lg:col-span-1"
                        src="./images/logos/5.svg" alt="#_" width="158" height="48">
                </div>
            </div>
        </div>
    </section>
    <section class="scroll-mt-24 o" id="pricing">
        <div class="h-full max-w-6xl px-8 py-24 mx-auto md:px-12 lg:px-32">
            <div class="text-center">
                <h2 class="text-4xl font-semibold tracking-tighter text-gray-900 lg:text-6xl">
                    Simple pricing
                </h2>
                <p class="max-w-xs mx-auto mt-4 text-sm text-gray-500">
                    Explore our range of flexible pricing plans to suit your unique
                    requirements
                </p>
            </div>
            <div class="grid grid-cols-1 gap-2 mt-24 lg:grid-cols-3">
                <div class="flex flex-col justify-between h-full gap-8 p-8 bg-gray-100 rounded-4xl">
                    <div>
                        <h3 class="text-base font-medium tracking-tight text-gray-900">
                            Limitless - $2999/month
                        </h3>
                        <p class="mt-4 text-sm text-gray-500">
                            Infinite requests and revisions, with the flexibility to cancel at
                            any time. Ideal for startups and agencies.
                        </p>
                    </div>
                    <a class="flex items-center justify-center w-auto h-10 px-4 py-2 text-sm font-semibold text-gray-900 transition-all bg-white rounded-full shrink-0 hover:bg-gray-800 hover:text-white"
                        href="/contact">Get started</a>
                </div>
                <div class="flex flex-col justify-between h-full gap-8 p-8 bg-black rounded-4xl">
                    <div>
                        <h3 class="text-base font-medium tracking-tight text-white">
                            Set Rate - $299/page
                        </h3>
                        <p class="mt-4 text-sm text-white">
                            Transparent fixed pricing from the start. Perfect for designers or
                            those well-versed in Jamstack.
                        </p>
                    </div>
                    <a class="flex items-center justify-center w-auto h-10 px-4 py-2 text-sm font-semibold text-gray-900 transition-all bg-white rounded-full shrink-0 hover:bg-gray-800 hover:text-white"
                        href="/start">Get started</a>
                </div>
                <div class="flex flex-col justify-between h-full gap-8 p-8 bg-gray-100 rounded-4xl">
                    <div>
                        <h3 class="text-base font-medium tracking-tight text-gray-900">
                            Tailored Quotation
                        </h3>
                        <p class="mt-4 text-sm text-gray-500">
                            Expect your estimate within 1 business day. Ideal for individuals
                            new to Jamstack architecture or intricate projects.
                        </p>
                    </div>
                    <a class="flex items-center justify-center w-auto h-10 px-4 py-2 text-sm font-semibold text-gray-900 transition-all bg-white rounded-full shrink-0 hover:bg-gray-800 hover:text-white"
                        href="/contact">Get in touch</a>
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
                        Frequent questions &amp; answers
                    </p>
                </div>
                <div class="flex flex-col gap-6 text-base text-gray-400 lg:col-span-2">
                    <details>
                        <summary class="text-base font-medium tracking-tight text-gray-900">
                            What does Jamstack entail?
                        </summary>
                        <p class="pt-4 text-sm text-gray-500">
                            JAMstack is an innovative approach to web development that stands
                            for JavaScript, APIs, and Markdown. It's all about creating faster
                            websites with improved SEO rankings and a better overall user
                            experience.
                        </p>
                    </details>
                    <details>
                        <summary class="text-base font-medium tracking-tight text-gray-900">
                            What coding languages ?
                        </summary>
                        <p class="pt-4 text-sm text-gray-500">
                            We utilize a range of modern technologies and languages to create
                            your websites, including HTML, CSS, JavaScript, and various
                            frameworks like React or Vue.js. Additionally, we work with headless
                            Content Management Systems (CMS) and APIs to manage content
                            efficiently.
                        </p>
                    </details>
                    <details>
                        <summary class="text-base font-medium tracking-tight text-gray-900">
                            How fast will I get my coded website?
                        </summary>
                        <p class="pt-4 text-sm text-gray-500">
                            The speed of delivery depends on the complexity of your project and
                            your specific requirements. We aim to provide swift delivery, and
                            we'll discuss the timeline during our initial consultation. Rest
                            assured, we're committed to delivering your website as efficiently
                            as possible.
                        </p>
                    </details>
                    <details>
                        <summary class="text-base font-medium tracking-tight text-gray-900">
                            How can I check the progress of my website?
                        </summary>
                        <p class="pt-4 text-sm text-gray-500">
                            We'll set up a convenient communication channel, such as email or a
                            project management platform, to keep you updated on the progress of
                            your website. You can communicate with us, ask questions, and
                            provide feedback through this channel to ensure a smooth
                            collaboration.
                        </p>
                    </details>
                    <details>
                        <summary class="text-base font-medium tracking-tight text-gray-900">
                            If I have a blog, do you count each post as a separate page?
                        </summary>
                        <p class="pt-4 text-sm text-gray-500">
                            The way we structure and charge for your blog pages can vary
                            depending on your specific needs. Generally, individual blog posts
                            can be counted as separate pages, but this can be discussed and
                            tailored to your preferences during our project discussions. We aim
                            to be flexible and accommodating to meet your requirements.
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
                            <p class="text-2xl font-bold uppercase">Agency</p>
                        </div>
                        <p class="mt-2 text-sm text-gray-500 lg:w-4/5">
                            Windstatic, basic and sturdy themes under the creative commons
                            license.
                        </p>
                    </div>
                    <div class="grid grid-cols-2 gap-8 mt-12 lg:grid-cols-3 lg:mt-0 xl:col-span-2">
                        <div>
                            <h3 class="text-black">Information</h3>
                            <ul role="list" class="mt-4 space-y-2">
                                <li>
                                    <a href="#_" class="text-sm text-gray-500 hover:text-black">
                                        License
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="text-black">Socials</h3>
                            <ul role="list" class="mt-4 space-y-2">
                                <li>
                                    <a href="https://twitter.com/lexingtonthemes"
                                        class="text-sm text-gray-500 hover:text-black">
                                        @lexingtonthemes
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/Mike_Andreuzza"
                                        class="text-sm text-gray-500 hover:text-black">
                                        @Mike_Andreuzza
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-12 md:mt-0">
                            <h3 class="text-black">Premium Themes</h3>
                            <ul role="list" class="mt-4 space-y-2">
                                <li>
                                    <a href="https://lexingtonthemes.com/"
                                        class="text-sm text-gray-500 hover:text-black">
                                        Lexington Themes
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col pt-12 md:flex-row md:items-center md:justify-between">
                    <p class="text-left">
                        <span class="mx-auto mt-2 text-sm text-gray-500 lg:mx-0">
                            © Windstatic. By:
                            <a class="text-black hover:text-accent-500" href="https://michaelandreuzza.com/">Michael
                                Andreuzza</a>
                            Demo Images: Respective owners.
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </footer>
</x-guest-layout>
