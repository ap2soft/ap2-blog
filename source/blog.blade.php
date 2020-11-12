---
title: Blog
description: The list of blog posts for the site
pagination:
  collection: posts
  perPage: 4
---
@extends('_layouts.master')

@section('body')
<div class="mt-32 container">
    <h1 class="text-3xl font-serif font-semibold">{{ $page->title }}</h1>
    <p class="text-gray-500">{{ $page->description }}</p>

    <div class="mt-8 space-y-6">
        @foreach ($pagination->items as $post)
            @include('_components.post-preview-inline')
        @endforeach
    </div>

    @if ($pagination->pages->count() > 1)
        <nav class="my-8 flex text-base space-x-3">
            @if ($previous = $pagination->previous)
                <a href="{{ $previous }}" title="Previous Page" class="border border-gray-300 rounded px-5 py-3 hover:text-gray-300 hover:bg-gray-700">&LeftArrow;</a>
            @endif

            @foreach ($pagination->pages as $pageNumber => $path)
                <a href="{{ $path }}" title="Go to Page {{ $pageNumber }}"
                    class="{{ $pagination->currentPage == $pageNumber ? 'text-gray-400 bg-gray-700' : 'text-gray-600' }} border border-gray-300 rounded px-5 py-3 hover:text-gray-300 hover:bg-gray-700">{{ $pageNumber }}</a>
            @endforeach

            @if ($next = $pagination->next)
                <a href="{{ $next }}" title="Next Page" class="border border-gray-300 rounded px-5 py-3 hover:text-gray-300 hover:bg-gray-700">&RightArrow;</a>
            @endif
        </nav>
    @endif
</div>
@stop
