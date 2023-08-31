<x-layouts.app title="blog" meta-description="blog meta description">

    <h1>blog</h1>

    <a href=" {{ route('posts.create') }} ">Crear nuevo post</a>
    @foreach ($posts as $post)
        <div style="display:flex; align-items:baseline">
            <h2>
                <a href="{{ route('posts.show', $post) }}">
                    {{ $post->title }}
                </a>
            </h2> &nbsp; &nbsp;
            <a href="{{ route('posts.edit', $post) }}">Edit</a> &nbsp;
            <form action="{{ route('posts.destroy', $post) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
    @endforeach

</x-layouts.app>
