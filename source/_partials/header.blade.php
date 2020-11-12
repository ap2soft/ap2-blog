<header id="top" class="absolute top-0 inset-x-0">
    <div class="container">
        <div class="flex justify-between items-center p-4">
            <a href="/" class="w-16 h-16 block text-gray-400 hover:text-white focus:outline-none focus:text-white" title="{{ $page->siteName }}">
                @include('_partials.logo')
            </a>

            <div>
                {{-- Nav Menu: Mobile --}}
                <div x-data="{ show: false }" x-init="
                    $watch('show', show =>
                        show
                            ? document.body.classList.add('overflow-hidden')
                            : document.body.classList.remove('overflow-hidden')
                    )
                    " x-cloak class="block sm:hidden">
                    <button x-on:click="show = true"
                        class="w-10 h-10 fill-current text-gray-400 hover:text-white focus:outline-none focus:shadow-outline">
                        @include('_svg.hamburger')
                    </button>

                    <div x-show="show" class="fixed z-40 inset-0 min-h-screen overflow-auto text-gray-600 bg-gray-100">
                        <div class="p-4 min-h-screen flex flex-col">
                            <div class="container flex justify-between items-center">
                                <a href="/" class="w-16 h-16 block text-gray-600 hover:text-gray-900 focus:outline-none focus:text-gray-900"
                                    title="{{ $page->siteName }}">
                                    @include('_partials.logo')
                                </a>

                                <button x-on:click="show = false" class="w-10 h-10 | hover:text-gray-900 | focus:outline-none focus:shadow-outline">
                                    @include('_svg.x')
                                </button>
                            </div>

                            <div class="flex-1 | text-3xl uppercase tracking-wider pb-16 | flex flex-col justify-center items-center">
                                <a href="/"
                                    class="inline-block | border-b-2 border-transparent px-4 py-2 | hover:text-gray-900 hover:border-gray-700 | focus:outline-none focus:shadow-outline"
                                    x-on:click="show = false">
                                    Home
                                </a>
                                <a href="/#skills"
                                    class="inline-block | border-b-2 border-transparent px-4 py-2 | hover:text-gray-900 hover:border-gray-700 | focus:outline-none focus:shadow-outline"
                                    x-on:click="show = false">
                                    Skills
                                </a>
                                <a href="/#contact"
                                    class="inline-block | border-b-2 border-transparent px-4 py-2 | hover:text-gray-900 hover:border-gray-700 | focus:outline-none focus:shadow-outline"
                                    x-on:click="show = false">
                                    Contacts
                                </a>
                                <a href="/blog"
                                    class="inline-block | border-b-2 border-transparent px-4 py-2 | hover:text-gray-900 hover:border-gray-700 | focus:outline-none focus:shadow-outline"
                                    x-on:click="show = false">
                                    Blog
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Nav Menu: Desktop --}}
                <div class="hidden sm:flex justify-end items-center">
                    <a href="/"
                        class="text-gray-400 text-xl uppercase tracking-wider border-2 border-transparent px-4 py-2 hover:text-white hover:border-white focus:outline-none- focus:shadow-outline-white">
                        Home
                    </a>
                    <a href="/#skills"
                        class="text-gray-400 text-xl uppercase tracking-wider border-2 border-transparent px-4 py-2 hover:text-white hover:border-white focus:outline-none- focus:shadow-outline-white">
                        Skills
                    </a>
                    <a href="/#contact"
                        class="text-gray-400 text-xl uppercase tracking-wider border-2 border-transparent px-4 py-2 hover:text-white hover:border-white focus:outline-none- focus:shadow-outline-white">
                        Contacts
                    </a>
                    <a href="/blog"
                        class="text-gray-400 text-xl uppercase tracking-wider border-2 border-transparent px-4 py-2 hover:text-white hover:border-white focus:outline-none- focus:shadow-outline-white">
                        Blog
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
