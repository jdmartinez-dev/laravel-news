@extends('master')

@section('content')

<a class="btn btn-success" href="{{ route('post.create') }}">Crear</a>

<table class="table table-sm mt-3">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Posteado</th>
            <th>Creación</th>
            <th>Actualización</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
            <tr>            
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->posted }}</td>
                <td>{{ $post->created_at->format('Y-m-d') }}</td>
                <td>{{ $post->updated_at->format('Y-m-d') }}</td>
                <td>
                    <a class="btn btn-sm btn-primary" href="{{ route('post.show', $post->id) }}">Ver</a>
                    <a class="btn btn-sm btn-primary" href="{{ route('post.edit', $post->id) }}">Editar</a>
                    <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteModal" data-id="{{ $post->id }}">Eliminar</button>                                   
                </td>
            </tr>            
        @endforeach
    </tbody>
</table>

{{ $posts->links() }}

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="p-0 m-0 text-center">¿Seguro, que deseas borrar el registro seleccionado?</p>
                <form id="post-destroy" action="{{ route('post.destroy', '') }}" method="POST">
                    @csrf 
                    @method("DELETE")
                </form>     
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-danger" form="post-destroy">Borrar</button>
            </div>
        </div>
    </div>
</div>

<script>
$('#deleteModal').on('show.bs.modal', function (event) {
    let button = $(event.relatedTarget);
    let id = button.data('id');
    let modal = $(this);
    let form = $('#post-destroy');

    form.attr('action', `${form.attr('action')}/${id}`);
    modal.find('.modal-title').text('Vas a borrar el POST: ' + id);
});
</script>
@endsection