@extends('admin.app')

@section('title') Manage Posts @endsection

@section('contentAdmin')

   <div>
      <div class="card shadow">
         <div class="card-body">
            <div class="category-header">
               <h4 class="mb-0 d-flex justify-content-between align-items-center">
                  <div class="fw-bold">
                     <i class="fas fa-list-alt"></i>
                     Manage Posts
                  </div>

                  <a href="{{ route('posts.index') }}">
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
               <form class="row g-3 mb-3" action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="col-md-6">
                     <label class="form-label">Category</label>
                     <select class="form-select @if(session('success')) is-valid @endif @error('category_id') is-invalid @enderror" aria-label="CategoryID" name="category_id">
                        <option value="">--- Select Category ---</option>
                        @foreach($Categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                           {{ $category->title }}
                        </option>
                        @endforeach
                     </select>
                     @error('category_id')
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
                     <label for="Photo" class="form-label">Photo</label>
                     <input type="file" class="form-control" id="Photo" name="photo">
                     @error('photo')
                     <small class="fw-bold text-danger">{{ $message }}</small>
                     @enderror
                  </div>
                  <div class="col-12">
                     <label for="editor1" class="form-label">Description</label>
                     <textarea class="form-control"
                               id="editor1" name="description" rows="3">{{ old('description') }}</textarea>
                     @error('description')
                     <small class="fw-bold text-danger">{{ $message }}</small>
                     @enderror
                  </div>
                  <div class="col-12">
                     <label for="editor2" class="form-label">Features Used</label>
                     <textarea class="form-control"
                               id="editor2" name="features_used" rows="3">{{ old('features_used') }}</textarea>
                     @error('features_used')
                     <small class="fw-bold text-danger">{{ $message }}</small>
                     @enderror
                  </div>
                  <div class="col-12">
                     <label for="editor3" class="form-label">Technologies Used</label>
                     <textarea class="form-control"
                               id="editor3" name="technologies_used" rows="3">{{ old('technologies_used') }}</textarea>
                     @error('technologies_used')
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

@section('admin_script')
<!---------- CK Editor ---------->
<script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>

<script>
   CKEDITOR.replace( 'editor1' );
   CKEDITOR.replace( 'editor2' );
   CKEDITOR.replace( 'editor3' );
</script>

@endsection