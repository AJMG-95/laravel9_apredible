<x-layouts.app title="Crear nuevo post" meta-description="Formulario para crear un nuevo blog post">
    <h1>Create new post</h1>


    {{--     @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
    @endforeach --}}

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        @include('posts.form-fields')
        <button type="submit">Enviar</button>
    </form><br>

    <a href="{{ route('posts.index') }}">Regresar</a>
</x-layouts.app>
