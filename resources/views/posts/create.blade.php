<x-layouts.app title="Crear nuevo post" meta-description="Formulario para crear un nuevo blog post">
    <h1>Create new post</h1>


    {{--     @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
    @endforeach --}}

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label for="">
            Title <br>
            <input type="text" name="title" id="" value="{{ old('title') }}">
            @error('title')
                <br>
                <small style="color: red">{{ $message }}</small>
            @enderror
        </label> <br>
        <label for="">
            Body <br>
            <textarea name="body" id="" cols="30" rows="10">{{ old('body') }}</textarea>
            @error('body')
                <br>
                <small style="color: red">{{ $message }}</small>
            @enderror
        </label> <br>
        <button type="submit">Enviar</button>
    </form><br>

    <a href="{{ route('posts.index') }}">Regresar</a>
</x-layouts.app>
