<x-layout>
    <article>
        <h1>
            {{ $post->title }}
        </h1>

        <p>
            <a href="/categories/{{ $post->category->slug }}">
                {{ $post->category->name }}
            </a>
        </p>

        <p>
            {!! $post->body !!}
        </p>
    </article>

    <a href="/">Go Back</a>
</x-layout>

