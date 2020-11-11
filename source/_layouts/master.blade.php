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

<body class="relative flex flex-col justify-between min-h-screen bg-gray-800 text-gray-200 leading-normal font-sans">

    @include('_partials.header')

    <main role="main">
        @yield('body')
    </main>

    @include('_partials.footer')

    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>

    @stack('scripts')
</body>

</html>
