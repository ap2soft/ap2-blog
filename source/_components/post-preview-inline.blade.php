<div class="flex flex-col">
    <div class="relative" style="padding-bottom: 33%">
        @if ($post->cover_image)
            <img src="{{ $post->cover_image }}" alt="{{ $post->title }}" class="absolute w-full h-full object-cover">
        @else
            <div class="absolute w-full h-full bg-gradient-to-r from-red-600 to-gray-800 | flex justify-center items-center">
               <a href="{{ $post->getUrl() }}" title="Read more - {{ $post->title }}" class="text-gray-300 text-xl font-serif font-bold tracking-wide hover:underline">
                    {{ $post->title }}
                </a>
            </div>
        @endif
    </div>

    <h2 class="mt-6 text-3xl">
        <a href="{{ $post->getUrl() }}" title="Read more - {{ $post->title }}" class="text-gray-300 font-serif font-bold tracking-wide hover:underline">
            {{ $post->title }}
        </a>
    </h2>

    <p class="mt-4 text-gray-500">
        {!! $post->getExcerpt(200) !!}
    </p>

    <div class="mt-4 text-gray-600 text-sm font-medium flex items-center space-x-1">
        <div class="w-4 h-4">@include('_svg.calendar')</div>
        <div>
            {{ $post->getDate()->format('F j, Y') }}
        </div>
    </div>
</div>
