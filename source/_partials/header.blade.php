<header id="top" class="absolute top-0 inset-x-0">
    <div class="container">
        <div class="flex justify-between items-center p-4">
            <a href="/" class="w-16 h-16 block text-gray-400 hover:text-white focus:outline-none focus:text-white" title="{{ $page->siteName }}">
                @include('_partials.logo')
            </a>

            <div>
                {{-- Nav Menu: Mobile --}}
                <div class="block sm:hidden">

                </div>

                {{-- Nav Menu: Desktop --}}
                <div class="flex justify-end items-center">
                    <a href="/"
                        class="text-gray-400 text-xl uppercase tracking-wider border-2 border-transparent px-4 py-2 hover:text-white hover:border-white focus:outline-none- focus:shadow-outline-white">
                        Home
                    </a>
                    <a href="/skills"
                        class="text-gray-400 text-xl uppercase tracking-wider border-2 border-transparent px-4 py-2 hover:text-white hover:border-white focus:outline-none- focus:shadow-outline-white">
                        Skills
                    </a>
                    <a href="/contact"
                        class="text-gray-400 text-xl uppercase tracking-wider border-2 border-transparent px-4 py-2 hover:text-white hover:border-white focus:outline-none- focus:shadow-outline-white">
                        Contacts
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
