<div class="flex flex-col py-6" href="{{ $post->getUrl() }}" title="Read more - {{ $post->title }}">
    <h2>
        <a
            href="{{ $post->getUrl() }}"
            title="Read more - {{ $post->title }}"
            class="text-gray-100 font-bold"
        >{{ $post->title }}</a>
    </h2>
    <p class="text-gray-600 font-medium my-0">
        {{ $post->getDate()->format('F j, Y') }}
    </p>

    <p class="mt-2">{!! $post->getExcerpt(500) !!}</p>
</div>
