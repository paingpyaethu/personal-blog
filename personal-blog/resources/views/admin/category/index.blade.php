@extends('admin.app')

@section('title') Category Manager @endsection

@section('contentAdmin')

<div class="">
   <div class="card shadow">
      <div class="card-body">
         <div class="category-header">
            <h4 class="mb-0">
               <i class="fas fa-layer-group"></i>
               Category Manager
            </h4>
            <hr>
            @if(session('success'))
               <span class="text-success fw-bold">{{ session('success') }}</span>
            @endif
            @if(session('delStatus'))
               <span class="text-success fw-bold">{{ session('delStatus') }}</span>
            @endif
            <form class="row g-2" action="{{ route('categories.store') }}" method="post">
               @csrf
               <div class="col-auto">
                  <label for="Title" class="visually-hidden">New Category</label>
                  <input type="text" class="form-control @if(session('success')) is-valid @endif @error('title') is-invalid @enderror"
                         name="title" id="Title" placeholder="New Category">
               </div>
               <div class="col-auto">
                  <button type="submit" class="btn btn-primary mb-3">Add Category</button>
               </div>
            </form>
            @error('title')
            <small class="text-danger fw-bold">{{ $message }}</small>
            @enderror

            @include('admin.category.list')
         </div>
      </div>
   </div>
</div>


@endsection