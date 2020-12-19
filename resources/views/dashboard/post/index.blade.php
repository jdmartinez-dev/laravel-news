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
                    <button class="btn btn-sm btn-danger" type="submit" form="post-destroy">Eliminar</button>
                    <form id="post-destroy" action="{{ route('post.destroy', $post->id) }}" method="POST">
                        @csrf 
                        @method("DELETE")
                    </form>                    
                </td>
            </tr>            
        @endforeach
    </tbody>
</table>

{{ $posts->links() }}
@endsection