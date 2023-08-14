<x-layouts.app title="blog" meta-description="blog meta description">
    <h1>blog</h1 </x-layouts.app>

    @foreach ($posts as $post)
        <h2> {{ $post->title }} </h2>
    @endforeach
