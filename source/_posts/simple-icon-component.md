---
extends: _layouts.post
section: content
title: Simple Icon Component
date: 2020-11-11
description: Make your code more readable by creating tiny icon component for SVG icons.
cover_image: /assets/img/simple-icon-component-cover.png
categories: [laravel, components]
---

If you are tired of inline SVG icons in your code then make a tiny [Laravel anonymous blade component](https://laravel.com/docs/blade#anonymous-components) that will make your code cleaner.

## Create an icon component

First, grab your SVG icon and extract it to a separate blade file inside of `resources/views/components/icons`.

For this example I chose a cake icon by [@steveschoger](https://twitter.com/steveschoger)'s awesome Heroicons collection (I prefer [heroicons.dev](https://heroicons.dev) over [heroicons.com](http://heroicons.com) because it already has width and height classes and other attributes are arranged neatly).

```html
<!-- resources/views/components/icons/cake.blade.php -->

<svg
    class="w-6 h-6"
    fill="currentColor"
    viewBox="0 0 20 20"
    xmlns="http://www.w3.org/2000/svg"
>
    <path fill-rule="evenodd" d="M6 3a1 1 0 011-1h.01a1 1 0 010 2H7a1 1 0 01-1-1zm2 3a1 1 0 00-2 0v1a2 2 0 00-2 2v1a2 2 0 00-2 2v.683a3.7 3.7 0 011.055.485 1.704 1.704 0 001.89 0 3.704 3.704 0 014.11 0 1.704 1.704 0 001.89 0 3.704 3.704 0 014.11 0 1.704 1.704 0 001.89 0A3.7 3.7 0 0118 12.683V12a2 2 0 00-2-2V9a2 2 0 00-2-2V6a1 1 0 10-2 0v1h-1V6a1 1 0 10-2 0v1H8V6zm10 8.868a3.704 3.704 0 01-4.055-.036 1.704 1.704 0 00-1.89 0 3.704 3.704 0 01-4.11 0 1.704 1.704 0 00-1.89 0A3.704 3.704 0 012 14.868V17a1 1 0 001 1h14a1 1 0 001-1v-2.132zM9 3a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1zm3 0a1 1 0 011-1h.01a1 1 0 110 2H13a1 1 0 01-1-1z" clip-rule="evenodd"></path>
</svg>
```

Next, create a new file inside of `resources/views/components` and name it `icon.blade.php`.

```php
<!-- resources/views/components/icon.blade.php -->

@props(['icon'])

@include('components/icons/' . $icon)
```

Now you can use it like this

```html
<!-- Somewhere in your blade files -->
<x-icon icon="cake" />
```

Look, how cool this is!

## Improvement #1: CSS classes

Right now you can't change the icon size, it's hard-coded to CSS classes `w-6 h-6`. Let's fix this by making your component to accept a new `class` property and we are going to pass it to the icon blade file.

```php
<!-- resources/views/components/icon.blade.php -->

@props(['icon', 'class' => 'w-6 h-6'])

@include('components/icons/'.$icon, ['classes' => $classes])
```

```html
<!-- resources/views/components/icons/cake.blade.php -->

<svg
    class="{{ $classes }}"
    fill="currentColor"
    viewBox="0 0 20 20"
    xmlns="http://www.w3.org/2000/svg"
>
    <path fill-rule="evenodd" d="M6 3a1 1 0 011-1h.01a1 1 0 010 2H7a1 1 0 01-1-1zm2 3a1 1 0 00-2 0v1a2 2 0 00-2 2v1a2 2 0 00-2 2v.683a3.7 3.7 0 011.055.485 1.704 1.704 0 001.89 0 3.704 3.704 0 014.11 0 1.704 1.704 0 001.89 0 3.704 3.704 0 014.11 0 1.704 1.704 0 001.89 0A3.7 3.7 0 0118 12.683V12a2 2 0 00-2-2V9a2 2 0 00-2-2V6a1 1 0 10-2 0v1h-1V6a1 1 0 10-2 0v1H8V6zm10 8.868a3.704 3.704 0 01-4.055-.036 1.704 1.704 0 00-1.89 0 3.704 3.704 0 01-4.11 0 1.704 1.704 0 00-1.89 0A3.704 3.704 0 012 14.868V17a1 1 0 001 1h14a1 1 0 001-1v-2.132zM9 3a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1zm3 0a1 1 0 011-1h.01a1 1 0 110 2H13a1 1 0 01-1-1z" clip-rule="evenodd"></path>
</svg>
```

Cool! Now you can give the icon some styling:

```html
<x-icon icon="cake" class="w-8 h-8 text-pink-500 mr-2" /> This is a cake.
```

## Improvement #2: Component placement

Next, let's move the component file into the `resources/views/components/icons` folder near the icons it uses. Just not to make the `components` folder too crowdy.

But this would make call the component too verbosy: `<x-icons.icon icon="cake" />`

To fix this we can alias the component inside of `AppServiceProvider` (or you can even create your own service provider if you need to).

```php
// app/Providers/AppServiceProvider.php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        Blade::component(
            'components.icons.icon', // The actual path where the component is.
            'icon' // The alias, how we would like to call it.
        );
    }
}
```

And now you can call it `<x-icon icon="cake" />` again!

## Improvement #3: More attributes

Sometimes you may need to to pass some extra attributes to an icon like `title` or some `data` attributes or whatever.

In this case you can use [Laravel's dynamic component](https://laravel.com/docs/blade#dynamic-components):

```php
<!-- resources/views/components/icons/icon.blade.php -->

@props(['icon'])

<x-dynamic-component :component="'icons.'.$icon" {{ $attributes }} />
```

Done! Now you can pass the icon **any** attribute you like to.

```html
<div>
    <x-icon
        icon="cake"
        class="w-8 h-8 text-pink-500 mr-2"
        title="Today is my birthday!"
    />
    {{ $user->birthday }}
</div>
```

## Improvement #4: What else?!

It's the last one. Promise! 🤞🏻

Let's add a caption to the icon. Because why not to!

I want to use my icon component like this:

```html
<!-- Usage -->
<x-icon icon="cake" class="w-6 h-6 text-yellow-500">
    <span class="text-red-500">This is a cake icon</span>
</x-icon>

<!-- The result -->
<div class="flex items-center">
    <svg class="w-6 h-6 text-yellow-500">
        <!-- SVG contents -->
    </svg>
    <div class="ml-2">
        <span class="text-red-500">This is a cake icon</span>
    </div>
</div>
```

This would be easy with [Blade component slot](https://laravel.com/docs/blade#slots)

```php
@props(['icon'])

<div class="flex items-center">
    <x-dynamic-component :component="'icons.'.$icon" {{ $attributes }} />
    @isset($slot)
        <div class="ml-2">
            {{ $slot }}
        </div>
    @endif
</div>
```

Voilà!
