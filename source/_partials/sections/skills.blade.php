<section id="skills" class="text-gray-900 bg-white py-16">
    <div class="container flex flex-col items-center">
        <h2 class="text-2xl uppercase border-b-4 border-red-500">Skills</h2>

        <div class="mt-8 max-w-xl w-full space-y-12">

            {{-- PHP --}}
            <div class="flex flex-col justify-center items-center sm:flex-row">
                <div class="w-20 flex-shrink-0">
                    @include('_svg.php')
                </div>

                <div class="mt-4 space-y-2 sm:mt-0 sm:mx-12 sm:pr-20">
                    <div class="text-center">
                        <h3 class="text-xl font-semibold tracking-wider">PHP</h3>
                        <p class="text-lg">
                            I can create any web app for you.
                        </p>
                    </div>

                    <div class="text-gray-700 text-center">
                        <h3 class="text-xl font-semibold uppercase tracking-wider">Stack</h3>
                        <p class="text-md">
                            Pure PHP, OOP, Laravel Framework, PhpUnit
                        </p>
                    </div>
                </div>
            </div>

            {{-- JS --}}
            <div class="flex flex-col justify-center items-center sm:flex-row-reverse">
                <div class="w-20 flex-shrink-0">
                    @include('_svg.javascript')
                </div>

                <div class="mt-4 space-y-2 sm:mt-0 sm:mx-12 sm:pl-20">
                    <div class="text-center">
                        <h3 class="text-xl font-semibold tracking-wider">Javascript</h3>
                        <p class="text-lg">
                            I can make a user-friendly, interactive app that functions how you need.
                        </p>
                    </div>

                    <div class="text-gray-700 text-center">
                        <h3 class="text-xl font-semibold uppercase tracking-wider">Stack</h3>
                        <p class="text-md">
                            Vanilla JS, jQuery, VueJs, Mocha
                        </p>
                    </div>
                </div>
            </div>

            {{-- CSS --}}
            <div class="flex flex-col justify-center items-center sm:flex-row">
                <div class="w-20 h-20 flex-shrink-0">
                    @include('_svg.css')
                </div>

                <div class="mt-4 space-y-2 sm:mt-0 sm:mx-12 sm:pr-20">
                    <div class="text-center">
                        <h3 class="text-xl font-semibold tracking-wider">CSS</h3>
                        <p class="text-lg">
                            I can create fully responsive websites that are compatible on all devices.
                        </p>
                    </div>

                    <div class="text-gray-700 text-center">
                        <h3 class="text-xl font-semibold uppercase tracking-wider">Stack</h3>
                        <p class="text-md">
                            CSS3, Sass, Less, TailwindCss
                        </p>
                    </div>
                </div>
            </div>

            {{-- DB --}}
            <div class="flex flex-col justify-center items-center sm:flex-row-reverse">
                <div class="w-20 h-20 flex-shrink-0">
                    @include('_svg.sql')
                </div>

                <div class="mt-4 space-y-2 sm:mt-0 sm:mx-12 sm:pl-20">
                    <div class="text-center">
                        <h3 class="text-xl font-semibold tracking-wider">Databases</h3>
                        <p class="text-lg">
                            I have a solid understanding of relational databases.
                            I can also modify heavy queries to make them
                            run faster and efficiently.
                        </p>
                    </div>

                    <div class="text-gray-700 text-center">
                        <h3 class="text-xl font-semibold uppercase tracking-wider">Stack</h3>
                        <p class="text-md">
                            MSSQL, MySql, PostgreSQL
                        </p>
                    </div>
                </div>
            </div>

            {{-- HTML --}}
            <div class="flex flex-col justify-center items-center sm:flex-row">
                <div class="w-20 h-20 flex-shrink-0">
                    @include('_svg.html')
                </div>

                <div class="mt-4 space-y-2 sm:mt-0 sm:mx-12 sm:pr-20">
                    <div class="text-center">
                        <h3 class="text-xl font-semibold tracking-wider">HTML</h3>
                        <p class="text-lg">
                            I write modern accessible HTML.
                        </p>
                    </div>

                    <div class="text-gray-700 text-center">
                        <h3 class="text-xl font-semibold uppercase tracking-wider">Stack</h3>
                        <p class="text-md">
                            HTML5
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
