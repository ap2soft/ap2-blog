<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="{{ $page->description ?? $page->siteDescription }}">

    <meta property="og:title" content="{{ $page->title ? $page->title . ' | ' : '' }}{{ $page->siteName }}" />
    <meta property="og:type" content="{{ $page->type ?? 'website' }}" />
    <meta property="og:url" content="{{ $page->getUrl() }}" />
    <meta property="og:description" content="{{ $page->description ?? $page->siteDescription }}" />

    <title>{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}</title>

    <link rel="home" href="{{ $page->baseUrl }}">

    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">

    <link href="/blog/feed.atom" type="application/atom+xml" rel="alternate" title="{{ $page->siteName }} Atom Feed">

    @if ($page->production)
        @include('_partials.analytics.yandex')
        <meta name="yandex-verification" content="865c277e68545812" />
        <meta name="google-site-verification" content="wq6JDWrVWdMU43DLkZ-ZRK0GjyA34T__Ywv0oL2oE18" />
    @endif

    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Extra+Condensed:wght@400;600&family=Space+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
</head>

<body class="flex flex-col justify-between min-h-screen bg-gray-100 text-gray-800 leading-normal font-sans">
    <section class="min-h-screen text-gray-300 | bg-left bg-cover bg-no-repeat"
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('assets/images/bg-laptop.jpg')">
        <div class="container px-12">
            <div class="min-h-screen flex flex-col justify-center items-center">
                <h1 class="text-4xl font-mono uppercase tracking-wide text-center | sm:text-5xl">Developer.</h1>

                <div class="mt-4">
                    <a href="#contacts"
                        class="px-4 py-2 inline-block text-gray-400 uppercase font-semibold tracking-wider border-2 border-gray-400 hover:text-white hover:border-white focus:outline-none focus:shadow-outline">
                        Contact Me
                    </a>
                </div>
            </div>
        </div>
    </section>

    <header class="flex items-center shadow bg-white border-b h-24 py-4" role="banner">
        <div class="container flex items-center max-w-8xl mx-auto px-4 lg:px-8">
            <div class="flex items-center">
                <a href="/" title="{{ $page->siteName }} home" class="inline-flex items-center">
                    <img class="h-8 md:h-10 mr-3" src="/assets/img/logo.svg" alt="{{ $page->siteName }} logo" />

                    <h1 class="text-lg md:text-2xl text-blue-800 font-semibold hover:text-blue-600 my-0">{{ $page->siteName }}</h1>
                </a>
            </div>

            <div id="vue-search" class="flex flex-1 justify-end items-center">
                <search></search>

                @include('_nav.menu')

                @include('_nav.menu-toggle')
            </div>
        </div>
    </header>

    @include('_nav.menu-responsive')

    <main role="main" class="flex-auto w-full container max-w-4xl mx-auto py-16 px-6">
        @yield('body')
    </main>

    <footer class="bg-white text-center text-sm mt-12 py-4" role="contentinfo">
        <ul class="flex flex-col md:flex-row justify-center list-none">
            <li class="md:mr-2">
                &copy; <a href="https://tighten.co" title="Tighten website">Tighten</a> {{ date('Y') }}.
            </li>

            <li>
                Built with <a href="http://jigsaw.tighten.co" title="Jigsaw by Tighten">Jigsaw</a>
                and <a href="https://tailwindcss.com" title="Tailwind CSS, a utility-first CSS framework">Tailwind CSS</a>.
            </li>
        </ul>
    </footer>

    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>

    @stack('scripts')
</body>

</html>
