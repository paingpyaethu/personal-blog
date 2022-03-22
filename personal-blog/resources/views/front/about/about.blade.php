<!doctype html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport"
         content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>About</title>

   <!---------- BootStrap Min Css ---------->
   <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
   <!---------- FontAweSome Css ---------->
   <link rel="stylesheet" href="{{ asset('vendor/@fortawesome/fontawesome-free/css/all.min.css') }}">
   <!---------- Style Css ---------->
   <link rel="stylesheet" href="{{ asset('css/style.css') }}">

   @yield('styles')
</head>
<body>

<!---------- NavBar - Header ------------>
@include('front.header')

<!---------- About Section - Edu-Exp ------------>
<section class="container">
   <div class="row my-5">
      <div class="col-12 col-md-5">
         <div class="right">
            <h3 class="about-me-title">About Me</h3>
            <div class="about-me-heading-line"></div>

            <div class="my-img text-center mt-3">
               <img src="{{ asset('images/about-me/my-img.png') }}" class="img-fluid rounded" alt="">
            </div>
            <div class="description text-center mt-3">
               <h5 class="fw-bold">
                  Hello, I'm Paing Pyae Thu. A web developer.
               </h5>
               <p>
                  I'm an enthusiastic and detail-oriented web developer
                  seeking an entry-level position with a company to use my skills in coding,
                  troubleshooting complex problems, and assisting in the timely completion of projects.
               </p>
            </div>

            <div class="row mt-3">
               <div class="col-md-6">
                  <div class="card shadow-sm">
                     <div class="card-body text-center">
                        <h5 class="icon text-success">
                           <i class="fas fa-user"></i>
                        </h5>
                        <div class="">
                           <p class="fw-bold">1+</p>
                           <p class="fw-bold text-secondary">Years of Exp</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="card shadow-sm">
                     <div class="card-body text-center">
                        <h5 class="icon text-success">
                           <i class="fas fa-project-diagram"></i>
                        </h5>
                        <div class="">
                           <p class="fw-bold">17</p>
                           <p class="fw-bold text-secondary">Projects</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="social-plugin mt-4 text-center fs-2">
               <a href="">
                  <i class="fab fa-facebook me-3"></i>
               </a>
               <a href="">
                  <i class="fab fa-github me-3"></i>
               </a>
               <a href="">
                  <i class="fab fa-linkedin"></i>
               </a>
            </div>
         </div>

      </div>

      <div class="col-12 col-md-7">
         <div class="row text-center mt-5 mt-md-0">
            <div class="col-12">
               <div class="">
                  <h3 class="skills-header">Skills</h3>
                  <div class="skills-heading-line"></div>
               </div>

               <div class="row">
                  <div class="col-12 px-4 px-lg-5">
                     @foreach($uiSkills as $skill)
                     <div class="skills">
                        <div class="d-flex justify-content-between fw-bold">
                           <span class="text-uppercase">{{ $skill->name }}</span>
                           <span class="">{{ $skill->percent }}%</span>
                        </div>
                        <div class="progress">
                           <div class="progress-bar {{ $skill->color_role }}" role="progressbar" style="width: {{ $skill->percent }}%"></div>
                        </div>
                     </div>
                     @endforeach
                     <div class="float-end mt-2">
                        {{ $uiSkills -> links() }}
                     </div>
                  </div>
                  <div class="col-12">

                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

</section>

<!---------- About Section - Skills ------------>
<section class="container-fluid bg-light">
   <div class="row">
      <div class="col-12">
         <div class="container">
            <div class="row text-center mt-5">
               <div class="col-12">
                  <h3 class="exp-edu-title">Project Experience & Education</h3>
                  <div class="exp-edu-heading-line"></div>
               </div>
            </div>

            <div class="row pt-3">
               <div class="col-12 col-xl-6 exp-edu-box">
                  <div class="exp-edu-item">
                     <div class="d-flex align-items-center">
                        <div class="edu-icon me-1"><i class="fas fa-graduation-cap"></i></div>
                        <div class="edu-title">
                           <span class="edu-title-1">2018</span>
                        </div>
                        <span class="edu-title-2">- pyay technological university</span>
                     </div>
                     <div class="degree">
                        <h4>Mechatronics Engineering ( Bachelor's Degree )</h4>
                        <div class="d-flex align-items-center project-title">
                           <i class="fas fa-arrow-right me-1 text-success"></i>
                           <p class="mb-0">Academic<span>Projects</span></p>
                        </div>
                        <div class="project-description">
                           <p class="mb-0">GPS and GSM Based Real-Time Vehicle Tracking System Using Arduino</p>
                           <p class="mb-0 mt-1">Pick and Place Robot Using Arduino with Camera and Sensor (Ultrasonic) </p>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="col-12 col-xl-6 exp-edu-box">
                  <div class="exp-edu-item">
                     <div class="d-flex align-items-center">
                        <div class="edu-icon"><i class="fas fa-award"></i></div>
                        <div class="edu-title">
                           <span class="edu-title-1">2021</span>
                        </div>
                        <span class="edu-title-2">- MMSIT</span>
                     </div>
                     <div class="degree">
                        <h4>web development php ( Laravel framework )</h4>
                        <div class="d-flex align-items-center project-title">
                           <img src="images/about-section/about-me-section/img-1.svg" alt="">
                           <p class="mb-0">Practical<span>Projects</span></p>
                        </div>
                        <div class="project-description">
                           <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                              Accusantium aperiam earum expedita laudantium. Aliquid debitis distinctio consectetur
                              adipisicing.
                           </p>
                        </div>
                     </div>
                  </div>

               </div>

               <div class="col-12 col-xl-6 exp-edu-box mb-xl-5">
                  <div class="exp-edu-item">
                     <div class="d-flex align-items-center">
                        <div class="edu-icon"><i class="fas fa-award"></i></div>
                        <div class="edu-title">
                           <span class="edu-title-1">2021</span>
                        </div>
                        <span class="edu-title-2">- MMSIT</span>
                     </div>
                     <div class="degree">
                        <h4>BWD ( BASIC WEB DESIGN COURSE )</h4>
                        <div class="d-flex align-items-center project-title">
                           <img src="images/about-section/about-me-section/img-1.svg" alt="">
                           <p class="mb-0">Practical<span>Projects</span></p>
                        </div>
                        <div class="project-description">
                           <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                              Accusantium aperiam earum expedita laudantium. Aliquid debitis distinctio consectetur
                              adipisicing.
                           </p>
                        </div>
                     </div>
                  </div>

               </div>

               <div class="col-12 col-xl-6 exp-edu-box mb-5">
                  <div class="exp-edu-item">
                     <div class="d-flex align-items-center">
                        <div class="edu-icon"><i class="fas fa-award"></i></div>
                        <div class="edu-title">
                           <span class="edu-title-1">2021</span>
                        </div>
                        <span class="edu-title-2">- MMSIT</span>
                     </div>
                     <div class="degree">
                        <h4>swd ( special web design course )</h4>
                        <div class="d-flex align-items-center project-title">
                           <img src="images/about-section/about-me-section/img-1.svg" alt="">
                           <p class="mb-0">Practical<span>Projects</span></p>
                        </div>
                        <div class="project-description">
                           <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                              Accusantium aperiam earum expedita laudantium. Aliquid debitis distinctio consectetur
                              adipisicing.
                           </p>
                        </div>
                     </div>
                  </div>

               </div>

            </div>




         </div>
      </div>
   </div>
</section>


























<!---------- BootStrap Bundle JS ---------->
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!---------- JQuery JS ---------->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<!---------- Main JS ---------->
<script src="{{ asset('js/main.js') }}"></script>

@yield('script')
</body>
</html>