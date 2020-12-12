@extends('master')

@section('content')
   @include('dashboard.partials.validation-error')

   <div class="card shadow rounded">
      <div class="card-header bg-light">
         <div class="card-title mb-0"><strong>Create Post</strong></div>
      </div>

      <div class="card-body">
         <form id="dashboard-create" action="{{ route('post.store') }}" method="POST">
            @csrf
            <div class="form-group">
               <label for="title"><strong>Título</strong></label>
               <input class="form-control form-control-sm" type="text" name="title" id="title">
               @error('title')
                  <small class="text-danger">{{ $message }}</small>
               @enderror
            </div>
            <div class="form-group">
               <label for="url_clean"><strong>URL Limpia</strong></label>
               <input class="form-control form-control-sm" type="text" name="url_clean" id="url_clean">
            </div>
            <div class="form-group">
               <label for="content"><strong>Contenido</strong></label>
               <textarea name="content" id="content" rows="3" class="form-control form-control-sm"></textarea>
            </div>
         </form>
      </div>

      <div class="card-footer bg-light">
         <div class="float-right">
            <button class="btn btn-success" type="submit" form="dashboard-create">Guardar</button>
         </div>
      </div>
   </div>
@stop