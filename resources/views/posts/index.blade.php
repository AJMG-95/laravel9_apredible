<x-layouts.app title="blog" meta-description="blog meta description">
    <h1>blog</h1>

    @foreach ($posts as $post)
        <h2>
            <a href="{{ route('posts.show', $post) }}">
                {{ $post->title }}
            </a>
        </h2>
    @endforeach

</x-layouts.app>