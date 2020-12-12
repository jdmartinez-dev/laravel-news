@extends('master')

@section('content')

<a href="{{ route('post.create') }}">Crear</a>
<table class="table table-sm">
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
                <td></td>
            </tr>            
        @endforeach
    </tbody>
</table>
@endsection