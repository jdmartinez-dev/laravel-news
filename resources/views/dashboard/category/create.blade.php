@extends('master')

@section('content')
   @include('dashboard.partials.validation-error')

   <div class="card shadow rounded">
      <div class="card-header bg-light">
         <div class="card-title mb-0"><strong>Create Category</strong></div>
      </div>

      <div class="card-body">
         <form id="category-create" action="{{ route('category.store') }}" method="POST">            
            @include('dashboard.category._form')
         </form>
      </div>

      <div class="card-footer bg-light">
         <div class="float-right">
            <button class="btn btn-success" type="submit" form="category-create">Guardar</button>
         </div>
      </div>
   </div>
@stop