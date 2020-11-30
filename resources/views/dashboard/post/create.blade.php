<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<script src="{{ asset('js/app.js') }}"></script>

<div class="container">
    <div class="card">
        <div class="card-header bg-light">
            <div class="card-title mb-0">Create Post</div>
        </div>

        <div class="card-body">
            <form action="{{ route('post.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Título</label>
                    <input class="form-control form-control-sm" type="text" name="title" id="title">
                </div>
                <div class="form-group">
                    <label for="url_clear">URL Limpia</label>
                    <input class="form-control form-control-sm" type="text" name="url_clear" id="url_clear">
                </div>
                <div class="form-group">
                    <label for="content">Contenido</label>
                    <textarea name="content" id="content" rows="3" class="form-control form-control-sm"></textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-success" type="submit">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>