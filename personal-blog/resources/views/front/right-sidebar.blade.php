{{--Right Sidebar--}}
<div class="right">
   <h3 class="about-me-title">About Me</h3>
   <div class="about-me-heading-line"></div>

   <div class="my-img text-center mt-3">
      <img src="{{ asset('storage/about-img/'.$abouts[0]->photo) }}" class="img-fluid rounded" alt="">
   </div>
   <div class="description text-center mt-3">
      <h5 class="fw-bold">
         {{$abouts[0]->title}}
      </h5>
      <p>
         {{$abouts[0]->description}}
      </p>
   </div>
   <div class="social-plugin mt-4 text-center fs-2 d-flex justify-content-evenly">
      @foreach($abouts as $about)
         <a href="">
            <i class="{{ $about->social_plugin }}"></i>
         </a>
      @endforeach
   </div>
</div>