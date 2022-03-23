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

                  <a href="{{ route('abouts.index') }}">
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
               <form class="row g-3 mb-3" action="{{ route('abouts.store') }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="col-md-6">
                     <label for="Photo" class="form-label">Photo</label>
                     <input type="file" class="form-control" id="Photo" name="photo">
                     <input type="hidden" name="no_photo" value="">

                     @error('photo')
                     <small class="fw-bold text-danger">{{ $message }}</small>
                     @enderror
                  </div>
                  <div class="col-md-6">
                     <label for="Title" class="form-label">Title</label>
                     <input type="text" class="form-control @if(session('success')) is-valid @endif @error('title') is-invalid @enderror"
                            id="Title" name="title"
                            value="{{ old('title') }}">
                     @error('title')
                     <small class="fw-bold text-danger">{{ $message }}</small>
                     @enderror
                  </div>
                  <div class="col-12">
                     <label for="Description" class="form-label">Description</label>
                     <textarea class="form-control @if(session('success')) is-valid @endif @error('description') is-invalid @enderror"
                               id="Description" name="description" rows="3">{{ old('description') }}</textarea>
                     @error('description')
                     <small class="fw-bold text-danger">{{ $message }}</small>
                     @enderror
                  </div>
                  <div class="col-md-6">
                     <label for="CardIcon" class="form-label">Card Icon</label>
                     <input type="text" class="form-control @if(session('success')) is-valid @endif @error('card_icon') is-invalid @enderror"
                            id="CardIcon" name="card_icon"
                            value="{{ old('card_icon') }}">
                     @error('card_icon')
                     <small class="fw-bold text-danger">{{ $message }}</small>
                     @enderror
                  </div>
                  <div class="col-md-6">
                     <label for="CardTitle" class="form-label">Card Title</label>
                     <input type="text" class="form-control @if(session('success')) is-valid @endif @error('card_title') is-invalid @enderror"
                            id="CardTitle" name="card_title"
                            value="{{ old('card_title') }}">
                     @error('card_title')
                     <small class="fw-bold text-danger">{{ $message }}</small>
                     @enderror
                  </div>
                  <div class="col-md-6">
                     <label for="CardDescription" class="form-label">Card Description</label>
                     <input type="text" class="form-control @if(session('success')) is-valid @endif @error('card_description') is-invalid @enderror"
                            id="CardDescription" name="card_description"
                            value="{{ old('card_description') }}">
                     @error('card_description')
                     <small class="fw-bold text-danger">{{ $message }}</small>
                     @enderror
                  </div>
                  <div class="col-md-6">
                     <label for="SocialPlugin" class="form-label">Social Plugin</label>
                     <input type="text" class="form-control @if(session('success')) is-valid @endif @error('social_plugin') is-invalid @enderror"
                            id="SocialPlugin" name="social_plugin"
                            value="{{ old('social_plugin') }}">
                     @error('social_plugin')
                     <small class="fw-bold text-danger">{{ $message }}</small>
                     @enderror
                  </div>

                  <div class="col-12">
                     <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
@endsection