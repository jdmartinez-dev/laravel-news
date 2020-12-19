@extends('master')

@section('content')
   @include('dashboard.partials.validation-error')

   <div class="card shadow rounded">
      <div class="card-header bg-light">
         <div class="card-title mb-0"><strong>Edit Post</strong></div>
      </div>

      <div class="card-body">
         <form id="post-edit" action="{{ route('post.update', $post->id) }}" method="POST">
            @method("PUT")
            @include('dashboard.post._form')
         </form>
      </div>

      <div class="card-footer bg-light">
         <div class="float-right">
            <button class="btn btn-success" type="submit" form="post-edit">Guardar</button>
         </div>
      </div>
   </div>
@stop