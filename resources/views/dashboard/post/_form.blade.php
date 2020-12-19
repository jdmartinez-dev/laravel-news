@csrf
<div class="form-group">
    <label for="title"><strong>Título</strong></label>
    <input class="form-control form-control-sm" type="text" name="title" id="title" value="{{ old('title', $post->title) }}">
    {{-- @error('title')
    <small class="text-danger">{{ $message }}</small>
    @enderror --}}
</div>
<div class="form-group">
    <label for="url_clean"><strong>URL Limpia</strong></label>
    <input class="form-control form-control-sm" type="text" name="url_clean" id="url_clean" value="{{ old('url_clean', $post->url_clean) }}">
</div>
<div class="form-group">
    <label for="content"><strong>Contenido</strong></label>
    <textarea name="content" id="content" rows="3" class="form-control form-control-sm">{{ old('content', $post->content) }}</textarea>
</div>