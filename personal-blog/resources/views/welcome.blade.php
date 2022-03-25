@extends('front.layout')

@include('front.banner')

@section('content')

   @foreach($Posts as $post)
   <div class="middle mb-5">
      <div class="project-img">
         <img src="{{ asset('storage/posts/'.$post->photo) }}" class="img-thumbnail" alt="">
      </div>
      <div class="project-title">
         <a href="{{ route('welcome.show', $post->id) }}" class="text-black">
            <h4 class="text-center mt-4 fw-bold">{{ $post->title }}</h4>
         </a>
         <p class="text-black-50 text-center">
            <i class="fas fa-clock"></i>
            {{ $post->created_at->format('F j, Y') }}
         </p>
      </div>
      <div class="project-categories text-center mt-3">
         <span class="fw-bold">{{ $post->Category->title }}</span>
         <div class="category-heading-line"></div>
      </div>
      <div class="project-description text-center mt-3">
         <p class="">
            {!! substr($post->description, 0, 106).'.....' !!}
         </p>
         <a href="{{ route('welcome.show',$post->id) }}">
            <button class="btn btn-danger btn-sm mt-2">Read More</button>
         </a>
      </div>
   </div>
   @endforeach

@endsection