<label for="">
    Title <br>
    <input type="text" name="title" id="" value="{{ old('title', $post->title) }}">
    @error('title')
        <br>
        <small style="color: red">{{ $message }}</small>
    @enderror
</label> <br>
<label for="">
    Body <br>
    <textarea name="body" id="" cols="30" rows="10">{{ old('body', $post->body) }}</textarea>
    @error('body')
        <br>
        <small style="color: red">{{ $message }}</small>
    @enderror
</label> <br>
