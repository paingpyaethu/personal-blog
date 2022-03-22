@extends('admin.app')

@section('title') User Manager @endsection

@section('contentAdmin')

   <div class="">
      <div class="card shadow">
         <div class="card-body">
            <div class="category-header">
               <h4 class="mb-0 fw-bold">
                  <i class="fas fa-users"></i>
                  User Manager
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
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>
                        <th>Created At</th>
                     </tr>
                     </thead>
                     <tbody>
                     @foreach($users as $user)
                     <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role }}</td>
                        <td>
                           <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                           <a href="{{ route('users.destroy',$user->id) }}" class="btn btn-danger btn-sm"
                           onclick="return confirm('Are u sure to delete>')">
                              <i class="fas fa-trash-alt"></i>
                           </a>
                        </td>
                        <td>{{ $user->created_at->format('d-m-Y') }}</td>
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