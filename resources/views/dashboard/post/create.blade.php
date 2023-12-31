@extends('master')

@section('content')
   @include('dashboard.partials.validation-error')

   <div class="card shadow rounded">
      <div class="card-header bg-light">
         <div class="card-title mb-0"><strong>Create Post</strong></div>
      </div>

      <div class="card-body">
         <form id="post-create" action="{{ route('post.store') }}" method="POST">            
            @include('dashboard.post._form')
         </form>
      </div>

      <div class="card-footer bg-light">
         <div class="float-right">
            <button class="btn btn-success" type="submit" form="post-create">Guardar</button>
         </div>
      </div>
   </div>
@stop