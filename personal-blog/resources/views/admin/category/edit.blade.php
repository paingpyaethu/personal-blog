@extends('admin.app')

@section('title') Category Manager @endsection

@section('contentAdmin')

   <div class="">
      <div class="card shadow">
         <div class="card-body">
            <div class="category-header">

               <h4 class="mb-0 d-flex justify-content-between align-items-center">
                  <div class="">
                     <i class="fas fa-layer-group"></i>
                     Category Manager
                  </div>

                  <a href="{{ route('categories.index') }}">
                     <button class="btn btn-outline-secondary">
                        <i class="fas fa-list"></i>
                     </button>
                  </a>
               </h4>
               <h4>

               </h4>
               <hr>

               @if(session('success'))
                  <span class="text-success fw-bold">{{ session('success') }}</span>
               @endif
               <form class="row g-2" action="{{ route('categories.update',$edit_category->id) }}" method="post">
                  @csrf
                  @method('put')
                  <div class="col-auto">
                     <label for="Title" class="visually-hidden">New Category</label>
                     <input type="text" class="form-control @if(session('success')) is-valid @endif @error('title') is-invalid @enderror"
                            value="{{ old('title', $edit_category->title) }}" name="title" id="Title" placeholder="New Category">
                  </div>
                  <div class="col-auto">
                     <button type="submit" class="btn btn-primary mb-3">Submit</button>
                  </div>
               </form>
               @error('title')
               <small class="text-danger fw-bold">{{ $message }}</small>
               @enderror

{{--               @include('admin.category.list')--}}
            </div>
         </div>
      </div>
   </div>


@endsection