@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="{{ $page->title }}" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="{{ $page->description }}" />
@endpush

@section('nav')
    <header class="flex items-center">
        <a href="/" class="text-gray-200">&lt;&lt;back</a>
        <p class="ml-2 text-gray-600 text-sm font-medium">written by {{ $page->author }} on {{ date('F j, Y', $page->date) }}</p>
    </header>
@endsection

@section('body')
    <h1 class="leading-none mb-2">{{ $page->title }}</h1>
    @if ($page->categories)
        @foreach ($page->categories as $i => $category)
            <a
                href="/{{ strtolower($category) }}"
                title="View posts in {{ $category }}"
                class="inline-block bg-gray-300 hover:bg-blue-200 leading-loose tracking-wide text-gray-800 uppercase text-xs font-semibold rounded mr-4 px-3 pt-px"
            >{{ $category }}</a>
        @endforeach
    @endif

    <div class="post">
        @yield('content')
    </div>

    <nav class="flex justify-between text-sm mt-10 md:text-base">
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
@endsection
