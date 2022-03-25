{{-- Left Sidebar --}}
<div class="left">
   <h4 class="latest-post shadow-sm">Latest Post</h4>
   <div class="left-projects">

      @foreach($Posts as $post)
      <div class="latest-projects my-4">
         <a href="{{ route('welcome.show',$post->id) }}" class="text-black">
            <img src="{{ asset('storage/posts/'.$post->photo) }}" class="img-fluid rounded" alt="">
            <div class="title">
               <h6 class="text-center mt-2">{{ $post->title }}</h6>
            </div>
         </a>
         <p class="text-black-50 text-center">
            <i class="fas fa-clock"></i>
            {{ $post->created_at->format('F j, Y') }}
         </p>
      </div>
      @endforeach

   </div>
</div>