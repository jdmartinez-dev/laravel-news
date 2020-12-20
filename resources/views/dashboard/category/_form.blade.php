@csrf
<div class="form-group">
    <label for="title"><strong>Título</strong></label>
    <input class="form-control form-control-sm" type="text" name="title" id="title" value="{{ old('title', $category->title) }}">
</div>
<div class="form-group">
    <label for="url_clean"><strong>URL Limpia</strong></label>
    <input class="form-control form-control-sm" type="text" name="url_clean" id="url_clean" value="{{ old('url_clean', $category->url_clean) }}">
</div>