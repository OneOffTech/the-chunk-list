<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>{{ $page->title }}</title>
        @viteRefresh()
        @if ($page->production)
        <link rel="stylesheet" href="{{ rtrim($page->baseUrl, '/') }}{{ vite('source/_assets/css/main.css') }}">
        @else
        <link rel="stylesheet" href="{{ vite('source/_assets/css/main.css') }}">
        @endif

        <link rel="icon" type="image/svg+xml" href="{{ $page->absoluteUrl('/assets/favicon.svg') }}">

        
        <meta property="og:title" content="{{ $page->title  }}">
        <meta property="og:locale" content="en_US">
        <meta name="description" content="{{ $page->description  }}">
        <meta property="og:description" content="{{ $page->description  }}">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta property="og:url" content="{{ $page->getUrl() }}">
        <meta property="og:site_name" content="OneOffTech">
        <meta property="og:image" content="{{ $page->absoluteUrl('/assets/images/og.jpg') }}">
        <meta property="og:type" content="website">
        <meta name="twitter:card" content="summary_large_image">
        <meta property="twitter:image" content="{{ $page->absoluteUrl('/assets/images/og.jpg') }}">
        <meta property="twitter:title" content="{{ $page->title  }}">
 
        

    </head>
    <body class="text-stone-900 font-sans antialiased bg-stone-100">
        @yield('body')


        
        <footer class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 grid grid-cols-3">
            
            <div class="space-y-4">
                <div>
                    <p class="mb-1 text-xl font-bold">Chunk List</p>
                    <p>Open-Source database of document parsers, their pricing, and capabilities</p>
                </div>


                <div>
                    <p class="mb-2">Brought you by <a href="https://oneofftech.de" class="underline">OneOffTech</a>.</p>
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 120" class="text-[#06038d] fill-current w-20 group">
                            <path class="" d="M414.4 18.8h-44.8c-4.9 0-8.9 4-8.9 8.9v63.1c0 4.9 4 8.8 8.9 8.8s8.9-3.9 8.9-8.8v-23h30.8c4.5 0 8-3.6 8-8 0-4.5-3.5-8-8-8h-30.8V34.9h35.9c4.5 0 8-3.6 8-8 0-4.5-3.6-8.1-8-8.1z"/>
                            <path class="" d="M487 34.9c4.5 0 8-3.6 8-8 0-4.5-3.5-8-8-8h-44.8c-4.9 0-8.6 4-8.6 8.9v63.1c0 4.9 3.8 8.8 8.7 8.8 4.9 0 8.7-3.9 8.7-8.8v-23h30.9c4.5 0 8-3.6 8-8 0-4.5-3.5-8-8-8H451v-17h36z"/>
                            <path class="" d="M306 17.6c-22.1 0-38.8 14.9-42.1 34.3h-15.1c-4 .1-7.2 3.4-7.2 7.4s3.2 7.3 7.2 7.4H264c3.4 19.2 19.9 33.8 41.9 33.8 24.7 0 42.7-18.6 42.7-41.4-.1-23.1-17.9-41.5-42.6-41.5zm23.9 41.6c0 13.7-9.8 24.9-24 24.9-11.4 0-20.2-7.4-23.1-17.5h23.1c4.1 0 7.5-3.2 7.5-7.3s-3.4-7.4-7.5-7.4h-23.3c2.7-10.4 11.4-18 23.1-18 14.2 0 24.2 11.4 24.2 25.2v.1z"/>
                            <path class="" d="M260.6 4.8l-10.5 15.5c-11.9 0-50-.1-50.2-.1-3.9.2-6.9 3.4-6.9 7.4 0 4.1 3.3 7.4 7.4 7.4h39.9L229 51.7h-29v-.1c-3.9.1-7.1 3.4-7.1 7.4s3.2 7.2 7.1 7.4h18.9L207 84.1h-6.4c-4 0-7.5 3.1-7.7 7.1-.1 3.2 1.8 5.9 4.6 7.1l-11.2 16.5c-.2.3 0 .7.4.7h3.9c.2 0 .4-.1.5-.3L265.7 4.7c.2-.3 0-.7-.4-.7H262c-.6 0-1.1.3-1.4.8z"/>
                            <path class="" d="M47.6 17.6C22.9 17.6 5 36.2 5 59v.2c0 22.8 17.7 41.2 42.4 41.2S90 81.7 90 59v-.2C90 36 72.3 17.6 47.6 17.6zm24.2 41.6c0 13.7-10 24.9-24.2 24.9S23.2 72.7 23.2 58.9v-.2c0-13.7 10-24.9 24.2-24.9S71.8 45.2 71.8 59v.2z"/>
                            <ellipse class="" cx="47.1" cy="59" rx="7.5" ry="7.5"/>
                            <path class="" d="M167.7 18.2c-4.8 0-8.7 3.9-8.7 8.7v41.3l-33.9-44.6c-2.4-3.1-4.8-5.2-9.1-5.2h-1.8c-4.9 0-9 3.9-9 8.9V91c0 4.8 4.1 8.7 8.9 8.7 4.8 0 8.9-3.9 8.9-8.7V48.1l35.1 46.3c2.4 3.1 4.8 5.2 9 5.2h.6c4.9 0 8.6-4 8.6-8.9V26.9c.1-4.8-3.8-8.7-8.6-8.7z"/>
                        </svg>
                    </p>
                </div>
            </div>
            
            <div class="col-start-3">

                <p class="leading-7 text-right">
                    <a href="https://github.com/OneOffTech/the-chunk-list" target="_blank" class="text-blue-600 hover:text-blue-800 inline-flex gap-1 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"  class="size-6"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>
                        GitHub
                    </a>
                </p>
        
            </div>
        </footer>

        {{-- <script type="application/json+ld">
        {"@context":"https://schema.org","@type":"WebPage",
        "description":"{{ $page->description  }}",
        "headline":"{{ $page->title  }}",
        "image":{"card":"summary_large_image","url":"/assets/images/og.jpg","@type":"imageObject"},
        "url":"{{ $page->getUrl() }}"}</script> --}}
    </body>
</html>
