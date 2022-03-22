@extends('admin.app')

@section('title') User Manager @endsection

@section('contentAdmin')

<div class="card">
   <div class="card-body">
      <div class="category-header">
         <h4 class="mb-0 d-flex justify-content-between align-items-center">
            <div class="fw-bold">
               <i class="fas fa-users"></i>
               User Manager
            </div>

            <a href="{{ route('users.index') }}">
               <button class="btn btn-outline-secondary">
                  <i class="fas fa-list"></i>
               </button>
            </a>
         </h4>
         <hr>

         <form class="row g-3" action="{{ route('users.update', $editUser->id) }}" method="post">
            @csrf
            <div class="col-md-6">
               <label for="Name" class="form-label">Name</label>
               <input type="text" class="form-control"
                      id="Name" name="name"
                      value="{{ old('name',$editUser->name) }}">
            </div>
            <div class="col-md-6">
               <label for="Email" class="form-label">Email</label>
               <input type="email" class="form-control" id="Email" name="email"
                      value="{{ old('email',$editUser->email) }}">
            </div>
            <div class="col-md-6">
               <label for="Role" class="form-label">State</label>
               <select id="Role" class="form-select" name="role">
                  <option>--- Select Role ---</option>
                  <option value="admin" {{ $editUser->role == 'admin' ? 'selected' : '' }}>
                     Admin
                  </option>
                  <option value="user" {{ $editUser->role == 'user' ? 'selected' : '' }}>
                     User
                  </option>

               </select>
            </div>
            <div class="col-12">
               <button type="submit" class="btn btn-primary">Update</button>
            </div>
         </form>

      </div>
   </div>
</div>


@endsection