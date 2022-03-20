@extends('front.layout')

@section('banner')

<!---------- Banner Page ------------>
<div class="container">
   <div class="row mt-5">
      <div class="col-12">
         <div class="banner">
            <img src="{{ asset('images/banner/banner-img.PNG') }}" alt="" class="img-fluid rounded">
            <div class="banner-caption">
               <div class="card w-50 m-auto mb-3">
                  <div class="card-body">
                     <h6>Paing Pyae Thu</h6>
                     <h3 class="fw-bold">Bring Ideas To Life With Web Technologies</h3>
                     <p class="text-black-50 fw-bold">
                        <i class="fas fa-book-journal-whills"></i>
                        Web Developer
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

@endsection