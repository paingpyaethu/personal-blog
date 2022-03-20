@extends('front.layout')

@section('content')
   <!---------- Single Blog Posts ------------>
   <div class="col-12 col-md-6">
      <div class="single-blog mb-5">

         <div class="card bg-light shadow-sm">
            <div class="card-body">
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-center mb-0">
                     <li class="breadcrumb-item"><a href="#">Home</a></li>
                     <li class="breadcrumb-item"><a href="#">Web App</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Responsive Profile Website</li>
                  </ol>
               </nav>
            </div>
         </div>

         <h2 class="single-post-title">
            Responsive Profile Website
         </h2>

         <div class="single-post-img shadow-sm">
            <img src="{{ asset('images/projects/img/img-1.png') }}" class="img-thumbnail" alt="">
         </div>
         <div class="single-post-description">
            <p class="mb-3">
               The project that I made from SWD design courses of MMS One Stop It Solutions.
               This is fully responsive single page profile website design.
            </p>
            <div class="main-features">
               <p class="fw-bold mb-2">
                  The main features of this website are:
               </p>
               <p>
                  <i class="fas fa-check-circle text-success"></i>
                  Responsive NavBar
               </p>
               <p>
                  <i class="fas fa-check-circle text-success"></i>
                  Scrollable NavBar with active class using <b>waypoint</b>
               </p>
               <p>
                  <i class="fas fa-check-circle text-success"></i>
                  Responsive home section - banner page
               </p>
               <p>
                  <i class="fas fa-check-circle text-success"></i>
                  Responsive about section
               </p>
               <p>
                  <i class="fas fa-check-circle text-success"></i>
                  Responsive services section
               </p>
               <p>
                  <i class="fas fa-check-circle text-success"></i>
                  Responsive prices section using <b>slick</b> - responsive carousel jQuery plugin
               </p>
               <p>
                  <i class="fas fa-check-circle text-success"></i>
                  Responsive contact us section
               </p>
               <p>
                  <i class="fas fa-check-circle text-success"></i>
                  Responsive footer section
               </p>
               <p>
                  <i class="fas fa-check-circle text-success"></i>
                  Responsive contact us section
               </p>
               <p>
                  <i class="fas fa-check-circle text-success"></i>
                  Website animation using <b>animate.css</b> - library with <b>wow.js</b> - JavaScript plugin
               </p>
               <p>
                  <i class="fas fa-check-circle text-success"></i>
                  Website Loading screen using <b>jQuery</b>
               </p>
            </div>
            <div class="technologies mt-4">
               <span class="fw-bold">Technologies Used - </span>
               <span>
                  HTML, CSS, Bootstrap, jQuery
               </span>
            </div>
         </div>
      </div>
   </div>
   <!---------- Single Blog Posts ------------>
@endsection