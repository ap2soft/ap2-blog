@extends('_layouts.master')

@section('body')
<section class="min-h-screen text-gray-300 | bg-left bg-cover bg-no-repeat"
    style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('assets/images/bg-laptop.jpg')">
    <div class="container">
        <div class="min-h-screen flex flex-col justify-center items-center">
            <h1 class="text-4xl font-mono uppercase tracking-wide text-center | sm:text-5xl">Developer.</h1>

            <div class="mt-4">
                <a href="/contact"
                    class="px-4 py-2 inline-block text-gray-400 uppercase font-semibold tracking-wider border-2 border-gray-400 hover:text-white hover:border-white focus:outline-none focus:shadow-outline">
                    Contact Me
                </a>
            </div>
        </div>
    </div>
</section>

@include('_partials.sections.contact')

@stop
