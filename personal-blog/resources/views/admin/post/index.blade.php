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

                  <a href="{{ route('posts.create') }}">
                     <button class="btn btn-outline-secondary">
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

               <div class="table-responsive">
                  <table class="table table-bordered table-hover">
                     <thead>
                     <tr>
                        <th>#</th>
                        <th>Category Name</th>
                        <th>Title</th>
                        <th>Photo</th>
                        <th>Description</th>
                        <th>Action</th>
                        <th>Created At</th>
                     </tr>
                     </thead>
                     <tbody>
                     @foreach($posts as $post)
                        <tr>
                           <td>{{ $post->id }}</td>
                           <td>{{ $post->Category->title }}</td>
                           <td>{{ $post->title }}</td>
                           <td>
                              <img src="{{ asset('storage/posts/'.$post->photo) }}" class="rounded img-fluid" alt="">
                           </td>
                           <td>{!! $post->description !!}</td>
                           <td>
                              <a href="" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                              <form action="" class="d-inline-block" method="post">
                                 @csrf
                                 @method('delete')
                                 <button class="btn btn-danger btn-sm"
                                         onclick="return confirm('Are u sure to delete>')">
                                    <i class="fas fa-trash"></i>
                                 </button>
                              </form>
                           </td>
                           <td>{{ $post->created_at->format('d-m-Y') }}</td>
                        </tr>
                     @endforeach
                     </tbody>
                  </table>
               </div>


            </div>
         </div>
      </div>
   </div>


@endsection

@section('admin_script')
   <!---------- CK Editor ---------->
   <script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>

   <script>
      CKEDITOR.replace( 'description' );
   </script>

@endsection