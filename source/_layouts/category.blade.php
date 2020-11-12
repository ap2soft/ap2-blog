@extends('_layouts.master')

@section('body')
<div class="mt-32 container pb-10">
    <h1 class="text-3xl font-serif font-semibold">{{ $page->title }}</h1>

    <div class="text-2xl border-b border-blue-200 mb-6 pb-6">
        @yield('content')
    </div>

    <div class="mt-8 space-y-6">
        @foreach ($page->posts($posts) as $post)
            @include('_components.post-preview-inline')
        @endforeach
    </div>
</div>
@stop
