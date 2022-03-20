@extends('front.layout')

@section('content')
   <div class="col-12 col-md-6">
      <div class="middle mb-5">
         <div class="project-img">
            <img src="{{ asset('images/projects/img/img-1.png') }}" class="img-thumbnail" alt="">
         </div>
         <div class="project-title">
            <a href="{{ route('blogs.show') }}" class="text-black">
               <h4 class="text-center mt-4 fw-bold">Responsive Profile Website</h4>
            </a>
            <p class="text-black-50 text-center">
               <i class="fas fa-clock"></i>
               March 18, 2022
            </p>
         </div>
         <div class="project-categories text-center mt-3">
            <span class="fw-bold">Web App</span>
            <div class="category-heading-line"></div>
         </div>
         <div class="project-description text-center mt-3">
            <p class="">
               The project that I made from SWD design courses of MMS One Stop It Solutions.
               This is fully responsive website....
            </p>
            <a href="">
               <button class="btn btn-danger btn-sm mt-2">Read More</button>
            </a>
         </div>
      </div>

      <div class="middle mb-5">
         <div class="project-img">
            <img src="{{ asset('images/projects/img/img-2.png') }}" class="img-thumbnail" alt="">
         </div>
         <div class="project-title">
            <h4 class="text-center mt-4 fw-bold">Responsive Mobile App Landing Page</h4>
            <p class="text-black-50 text-center">
               <i class="fas fa-clock"></i>
               March 18, 2022
            </p>
         </div>
         <div class="project-categories text-center mt-3">
            <span class="fw-bold">Web App</span>
            <div class="category-heading-line"></div>
         </div>
         <div class="project-description text-center mt-3">
            <p class="">
               The project that I made from SWD design courses of MMS One Stop It Solutions.
               This is fully responsive website....
            </p>
            <a href="">
               <button class="btn btn-danger btn-sm mt-2">Read More</button>
            </a>
         </div>
      </div>
      <div class="middle mb-5">
         <div class="project-img">
            <img src="{{ asset('images/projects/img/img-2.png') }}" class="img-thumbnail" alt="">
         </div>
         <div class="project-title">
            <h4 class="text-center mt-4 fw-bold">Responsive Mobile App Landing Page</h4>
            <p class="text-black-50 text-center">
               <i class="fas fa-clock"></i>
               March 18, 2022
            </p>
         </div>
         <div class="project-categories text-center mt-3">
            <span class="fw-bold">Web App</span>
            <div class="category-heading-line"></div>
         </div>
         <div class="project-description text-center mt-3">
            <p class="">
               The project that I made from SWD design courses of MMS One Stop It Solutions.
               This is fully responsive website....
            </p>
            <a href="">
               <button class="btn btn-danger btn-sm mt-2">Read More</button>
            </a>
         </div>
      </div>
      <div class="middle mb-5">
         <div class="project-img">
            <img src="{{ asset('images/projects/img/img-2.png') }}" class="img-thumbnail" alt="">
         </div>
         <div class="project-title">
            <h4 class="text-center mt-4 fw-bold">Responsive Mobile App Landing Page</h4>
            <p class="text-black-50 text-center">
               <i class="fas fa-clock"></i>
               March 18, 2022
            </p>
         </div>
         <div class="project-categories text-center mt-3">
            <span class="fw-bold">Web App</span>
            <div class="category-heading-line"></div>
         </div>
         <div class="project-description text-center mt-3">
            <p class="">
               The project that I made from SWD design courses of MMS One Stop It Solutions.
               This is fully responsive website....
            </p>
            <a href="">
               <button class="btn btn-danger btn-sm mt-2">Read More</button>
            </a>
         </div>
      </div>
   </div>
@endsection