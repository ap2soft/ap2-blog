@extends('_layouts.master')

@php
$page->type = 'article';
@endphp

@section('body')
    @include('_partials.header', ['classes' => 'bg-gray-800 bg-opacity-25'])

<div class="relative" style="padding-bottom: 33%">
    @if ($page->cover_image)
    <img src="{{ $page->cover_image }}" alt="{{ $page->title }}" class="absolute w-full h-full object-cover">
    @else
    <div class="absolute w-full h-full bg-gradient-to-r from-red-600 to-gray-800 | flex justify-center items-center"></div>
    @endif
</div>

<div class="container py-6">
    <h1 class="text-5xl font-serif font-semibold">{{ $page->title }}</h1>

    <p class="text-gray-600 text-xl md:mt-0">{{ $page->author }} • {{ date('F j, Y', $page->date) }}</p>

    @if ($page->categories)
        <div class="mt-2 space-x-1">
            @foreach ($page->categories as $i => $category)
                <a href="{{ '/blog/categories/' . $category }}" title="View posts in {{ $category }}"
                    class="inline-block text-gray-600 text-xs uppercase leading-loose tracking-wide font-semibold border border-gray-600 rounded px-3 pt-px hover:text-gray-800 hover:bg-gray-400">
                    {{ $category }}
                </a>
            @endforeach
        </div>
    @endif

    <div class="mt-8 border-b border-blue-200 pb-8 prose">
        @yield('content')
    </div>

    <nav class="mt-8 flex justify-between text-sm md:text-base">
        <div>
            @if ($next = $page->getNext())
            <a href="{{ $next->getUrl() }}" title="Older Post: {{ $next->title }}">
                &LeftArrow; {{ $next->title }}
            </a>
            @endif
        </div>

        <div>
            @if ($previous = $page->getPrevious())
            <a href="{{ $previous->getUrl() }}" title="Newer Post: {{ $previous->title }}">
                {{ $previous->title }} &RightArrow;
            </a>
            @endif
        </div>
    </nav>
</div>
@endsection
