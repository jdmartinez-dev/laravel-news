@extends('master')

@section('content')
   <div class="card shadow rounded">
      <div class="card-header bg-light">
         <div class="card-title mb-0"><strong>Show Category</strong></div>
      </div>

      <div class="card-body">
         <form id="dashboard-category-show">
            <div class="form-group">
               <label for="title"><strong>Título</strong></label>
               <input readonly class="form-control form-control-sm" type="text" name="title" id="title" value="{{ $category->title }}">
            </div>
            <div class="form-group">
               <label for="url_clean"><strong>URL Limpia</strong></label>
               <input readonly class="form-control form-control-sm" type="text" name="url_clean" id="url_clean" value="{{ $category->url_clean }}">
            </div>
         </form>
      </div>

      {{-- <div class="card-footer bg-light">
         <div class="float-right">
            <button class="btn btn-success" type="submit" form="dashboard-create">Guardar</button>
         </div>
      </div> --}}
   </div>
@stop