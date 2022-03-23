@extends('admin.app')

@section('title') Manage Skills @endsection

@section('contentAdmin')

   <div class="">
      <div class="card shadow">
         <div class="card-body">
            <div class="category-header">
               <h4 class="mb-0 d-flex justify-content-between align-items-center">
                  <div class="fw-bold">
                     <i class="fas fa-book-journal-whills"></i>
                     Manage Skills
                  </div>

                  <a href="{{ route('skills.index') }}">
                     <button class="btn btn-outline-secondary">
                        <i class="fas fa-list"></i>
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
               <form class="row g-3 mb-3" action="{{ route('skills.update',$edit_skill->id) }}" method="post">
                  @csrf
                  @method('put')
                  <div class="col-md-6">
                     <label for="Name" class="form-label">Name</label>
                     <input type="text" class="form-control @if(session('success')) is-valid @endif @error('name') is-invalid @enderror"
                            id="Name" name="name"
                            value="{{ old('name',$edit_skill->name) }}">
                     @error('name')
                     <small class="fw-bold text-danger">{{ $message }}</small>
                     @enderror
                  </div>
                  <div class="col-md-6">
                     <label for="Percent" class="form-label">Percent</label>
                     <input type="text" class="form-control @if(session('success')) is-valid @endif @error('percent') is-invalid @enderror"
                            id="Percent" name="percent"
                            value="{{ old('percent',$edit_skill->percent) }}">
                     @error('percent')
                     <small class="fw-bold text-danger">{{ $message }}</small>
                     @enderror
                  </div>
                  <div class="col-md-6">
                     <label for="ColorRole" class="form-label">Color Role</label>
                     <input type="text" class="form-control  @if(session('success')) is-valid @endif @error('color_role') is-invalid @enderror"
                            id="ColorRole" name="color_role"
                            value="{{ old('color_role',$edit_skill->color_role) }}">
                     @error('color_role')
                     <small class="fw-bold text-danger">{{ $message }}</small>
                     @enderror
                  </div>
                  <div class="col-12">
                     <button type="submit" class="btn btn-primary">Update</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
@endsection