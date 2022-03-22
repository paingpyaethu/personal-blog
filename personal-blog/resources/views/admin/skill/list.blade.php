<div class="table-responsive">
   <table class="table table-bordered table-hover">
      <thead>
      <tr>
         <th>#</th>
         <th>Name</th>
         <th>Percent</th>
         <th>Color Role</th>
         <th>Action</th>
         <th>Created At</th>
      </tr>
      </thead>
      <tbody>
      @foreach($skills as $skill)
         <tr>
            <td>{{ $skill->id }}</td>
            <td>{{ $skill->name }}</td>
            <td>{{ $skill->percent }}</td>
            <td>{{ $skill->color_role }}</td>
            <td>
               <a href="{{ route('skills.edit',$skill->id) }}" class="btn btn-outline-primary btn-sm"><i class="fas fa-edit"></i></a>
               <form action="{{ route('skills.destroy',$skill->id) }}" class="d-inline-block" method="post">
                  @csrf
                  @method('delete')

                  <button class="btn btn-outline-danger btn-sm"
                          onclick="return confirm('Are u sure to delete {{$skill->name}}!!')">
                     <i class="fas fa-trash-alt"></i>
                  </button>
               </form>
            </td>
            <td>{{ $skill->created_at->format('d-m-Y') }}</td>
         </tr>
      @endforeach
      </tbody>

   </table>
   {{ $skills -> links() }}
</div>