@extends('admin.app')

@section('title') Manage About @endsection

@section('contentAdmin')
   <div>
      <div class="card shadow">
         <div class="card-body">
            <div class="category-header">
               <h4 class="mb-0 d-flex justify-content-between align-items-center">
                  <div class="fw-bold">
                     <i class="fas fa-user"></i>
                     Manage About
                  </div>

                  <a href="{{ route('abouts.create') }}">
                     <button class="btn btn-outline-primary">
                        <i class="fas fa-circle-plus"></i>
                     </button>
                  </a>
               </h4>
               <hr>
               @if(session('success'))
                  <div class="alert alert-success alert-dismissible show fade">
                     <div>{{ session('success') }}</div>
                     <button class="btn-close" data-bs-dismiss="alert"></button>
                  </div>
               @endif
            </div>
         </div>
      </div>
   </div>
@endsection