<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="{{ $page->siteDescription }}">

        <meta property="og:title" content="{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}"/>
        <meta property="og:type" content="website" />
        <meta property="og:url" content="{{ $page->getUrl() }}"/>
        <meta property="og:description" content="{{ $page->siteDescription }}" />

        <title>{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}</title>

        <link rel="home" href="{{ $page->baseUrl }}">
        <link rel="icon" href="/favicon.ico">
        <link href="/blog/feed.atom" type="application/atom+xml" rel="alternate" title="{{ $page->siteName }} Atom Feed">

        @stack('meta')

        @if ($page->production)
            <!-- Insert analytics code here -->
        @endif

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,300i,400,400i,700,700i,800,800i" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    </head>

    <body class="font-sans antialiased bg-gray-900 flex flex-col min-h-screen">
        <header class="container w-full max-w-4xl mx-auto px-6 pt-8">
            <div class="flex items-center">
                <h1 class="text-blue-100">~ separovic.dev</h1>
                <div class="ml-2 w-3 h-7 bg-gray-100 blink" style="animation: 1s linear 0s infinite normal none running blink"></div>
            </div>
            <nav class="flex text-lg">
                <a title="{{ $page->siteName }} Blog"
                   href="/"
                   class="text-gray-200 hover:text-blue-600">
                    blog.<span class="{{ $page->isActive('/') ? 'active text-blue-600' : '' }}">php</span>
                </a>
                <a title="{{ $page->siteName }} About"
                   href="/about"
                   class="ml-6 text-gray-200 hover:text-blue-600"
                >
                    about.<span class="{{ $page->isActive('/about') ? 'active text-blue-600' : '' }}">php</span>
                </a>
            </nav>
        </header>

        <main role="main" class="container w-full max-w-4xl mx-auto px-6 mt-6 flex-1">
            @yield('body')
        </main>

        <footer class="text-center text-sm w-64 mx-auto mt-12 py-4" role="contentinfo">
            <ul class="flex justify-between list-none">
                <li>
                    <a href="https://twitter.com/jseparovic1" title="Twitter profile">Twitter</a>
                </li>
                <li>
                    <a href="https://github.com/jseparovic1" title="Github ">Github</a>
                </li>
                <li>
                    <a href="https://twitter.com/jseparovic1" title="Linkedin">Linkedin</a>
                </li>
            </ul>
        </footer>

        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>

        @stack('scripts')
    </body>
</html>
