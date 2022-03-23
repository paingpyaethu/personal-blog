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

                  <a href="{{ route('edu-exps.create') }}">
                     <button class="btn btn-outline-primary">
                        <i class="fas fa-circle-plus"></i>
                     </button>
                  </a>
               </h4>
               <hr>

               <div class="table-responsive">
                  <table class="table table-bordered table-hover">
                     <thead>
                     <tr>
                        <th>#</th>
                        <th>Exp Edu Title</th>
                        <th>Edu Year</th>
                        <th>Edu Name</th>
                        <th>Degree Name</th>
                        <th>Project Title</th>
                        <th>Project Description</th>
                        <th>Action</th>
                        <th>Created At</th>
                     </tr>
                     </thead>
                     <tbody>
                     @foreach($eduExps as $eduExp)
                        <tr>
                           <td>{{ $eduExp->id }}</td>
                           <td>{{ $eduExp->edu_exp_title }}</td>
                           <td>{{ $eduExp->edu_year }}</td>
                           <td>{{ $eduExp->edu_name }}</td>
                           <td>{{ $eduExp->degree_name }}</td>
                           <td>{{ $eduExp->project_title }}</td>
                           <td>{{ $eduExp->project_description }}</td>
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
                           <td>{{ $eduExp->created_at->format('d-m-Y') }}</td>
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