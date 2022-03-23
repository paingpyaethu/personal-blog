@extends('admin.app')

@section('title') Manage Edu-Exp @endsection

@section('contentAdmin')
   <div>
      <div class="card shadow">
         <div class="card-body">
            <div class="category-header">
               <h4 class="mb-0 d-flex justify-content-between align-items-center">
                  <div class="fw-bold">
                     <i class="fas fa-graduation-cap"></i>
                     Manage Exp & Edu
                  </div>

                  <a href="{{ route('edu-exps.index') }}">
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
               <form class="row g-3 mb-3" action="{{ route('edu-exps.store') }}" method="post">
                  @csrf
                  <div class="col-md-6">
                     <label for="ExpEduTitle" class="form-label">Exp Edu Title</label>
                     <input type="text" class="form-control @if(session('success')) is-valid @endif @error('edu_exp_title') is-invalid @enderror"
                            id="ExpEduTitle" name="edu_exp_title"
                            value="{{ old('name') }}">
                     @error('edu_exp_title')
                     <small class="fw-bold text-danger">{{ $message }}</small>
                     @enderror
                  </div>
                  <div class="col-md-6">
                     <label for="EduYear" class="form-label">Edu Year</label>
                     <input type="text" class="form-control @if(session('success')) is-valid @endif @error('edu_year') is-invalid @enderror"
                            id="EduYear" name="edu_year"
                            value="{{ old('edu_year') }}">
                     @error('edu_year')
                     <small class="fw-bold text-danger">{{ $message }}</small>
                     @enderror
                  </div>
                  <div class="col-md-6">
                     <label for="EduName" class="form-label">Edu Name</label>
                     <input type="text" class="form-control @if(session('success')) is-valid @endif @error('edu_name') is-invalid @enderror"
                            id="EduName" name="edu_name"
                            value="{{ old('edu_name') }}">
                     @error('edu_name')
                     <small class="fw-bold text-danger">{{ $message }}</small>
                     @enderror
                  </div>
                  <div class="col-md-6">
                     <label for="DegreeName" class="form-label">Degree Name</label>
                     <input type="text" class="form-control @if(session('success')) is-valid @endif @error('degree_name') is-invalid @enderror"
                            id="DegreeName" name="degree_name"
                            value="{{ old('degree_name') }}">
                     @error('degree_name')
                     <small class="fw-bold text-danger">{{ $message }}</small>
                     @enderror
                  </div>
                  <div class="col-md-6">
                     <label for="ProjectTitle" class="form-label">Project Title</label>
                     <input type="text" class="form-control  @if(session('success')) is-valid @endif @error('project_title') is-invalid @enderror"
                            id="ProjectTitle" name="project_title"
                            value="{{ old('project_title') }}">
                     @error('project_title')
                     <small class="fw-bold text-danger">{{ $message }}</small>
                     @enderror
                  </div>
                  <div class="col-12">
                     <label for="ProjectDescription" class="form-label">Project Description</label>
                     <textarea class="form-control @if(session('success')) is-valid @endif @error('project_description') is-invalid @enderror"
                               id="ProjectDescription" name="project_description" rows="3">{{ old('project_description') }}</textarea>
                     @error('project_title')
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