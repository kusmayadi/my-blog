<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="referrer" content="always">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>{{ $page->title }}</title>
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <script src="{{  mix('js/main.js', 'assets/build') }}"></script>
    </head>
    <body>

        <header class="h-64 bg-fixed bg-center bg-cover" style="background-image: url(https://kusmayadi.com/images/silver-and-black-laptop-computer-1229861.jpg)">
            <div class="absolute w-full">
                @include('_components/nav')
            </div>
            <div class="h-64 m-auto flex items-center justify-center align-middle">
                <h1 class="text-center text-white font-semibold text-4xl sm:text-5xl md:text-6xl">Blog</h1>
            </div>
        </header>

        <!-- Content -->
        <div class="container lg:w-1/2 mx-auto px-4 mt-4">
            @yield('content')
        </div>
        <!-- End Content -->
    </body>
</html>
