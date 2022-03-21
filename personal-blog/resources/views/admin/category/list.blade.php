<div class="table-responsive">
   <table class="table table-bordered table-hover">
      <thead>
      <tr>
         <th>#</th>
         <th>Title</th>
         <th>Action</th>
         <th>Created At</th>
      </tr>
      </thead>
      <tbody>
      @foreach($categories as $category)
         <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->title }}</td>
            <td>
               <a href="{{ route('categories.edit',$category->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
               <form action="{{ route('categories.destroy',$category->id) }}" class="d-inline-block" method="post">
                  @csrf
                  @method('delete')
                  <button class="btn btn-danger btn-sm"
                          onclick="return confirm('Are u sure to delete>')">
                     <i class="fas fa-trash"></i>
                  </button>
               </form>
            </td>
            <td>{{ $category->created_at->format('d-m-Y') }}</td>
         </tr>
      @endforeach
      </tbody>
   </table>
</div>