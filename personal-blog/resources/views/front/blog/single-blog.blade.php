@extends('front.layout')

@section('content')
<!---------- Single Blog Posts ------------>
   <div class="single-blog mb-5">

      <div class="card bg-light shadow-sm">
         <div class="card-body">
            <nav aria-label="breadcrumb">
               <ol class="breadcrumb justify-content-center mb-0">
                  <li class="breadcrumb-item"><a href="{{ route('welcome.index') }}">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">{{ $postDetail->Category->title }}</a></li>
                  <li class="breadcrumb-item active" aria-current="page">{{ $postDetail->title }}</li>
               </ol>
            </nav>
         </div>
      </div>

      <h2 class="single-post-title">
         {{ $postDetail->title }}
      </h2>

      <div class="single-post-img shadow-sm">
         <img src="{{ asset('storage/posts/'.$postDetail->photo) }}" class="img-thumbnail" alt="">
      </div>

      <div class="single-post-description">
         <p class="mb-3">
            {!! $postDetail->description !!}
         </p>
         <div class="main-features">
               {!! $postDetail->features_used !!}
         </div>
         <div class="technologies mt-4">
           {!! $postDetail->technologies_used !!}
         </div>
      </div>

   @if(Auth::check())
      <div class="mt-3">
         <button class="btn btn-sm btn-outline-success" @if($likeStatus) @if($likeStatus->type == 'like') disabled @endif @endif
                 id="likeBtn" formaction="{{ route('post.like',$postDetail->id) }}">
            <i class="fas fa-thumbs-up"></i>
            Like <span class="like_count">{{ $like->count() }}</span>
         </button>
         <button class="btn btn-sm btn-danger" @if($likeStatus) @if($likeStatus->type == 'dislike') disabled @endif @endif
         id="dislikeBtn" formaction="{{ route('post.dislike',$postDetail->id) }}">
            <i class="fas fa-thumbs-down"></i>
            Dislike <span class="dislike_count">{{ $dislike->count() }}</span>
         </button>

         <button type="button" class="btn btn-sm btn-outline-secondary">
            <i class="fas fa-comment"></i>
            Comment <span>2</span>
         </button>
      </div>
      @endif
   </div>
<!---------- Single Blog Posts ------------>
@endsection

@section('script')
<script>
   $('#likeBtn').on('click',function (e) {
      e.preventDefault();

      $.ajaxSetup({
         headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
      });

      let inputNames = $(this).serialize() // $(this) = $('#likeBtn')

      $.post($(this).attr('formaction'), inputNames, function (response) {
         if (response.status === 200 )
         {
            let _prevLikeCount = $('.like_count').text();
            _prevLikeCount++;
            $('.like_count').text(_prevLikeCount);
            $('#likeBtn').attr("disabled","disabled");
         }else if (response.updateStatus == 'success')
         {
            let _prevLikeCount = $('.like_count').text();
            _prevLikeCount++;
            $('.like_count').text(_prevLikeCount);
            $('#likeBtn').attr("disabled","disabled");

            let _prevDisLikeCount = $('.dislike_count').text();
            _prevDisLikeCount--;
            $('.dislike_count').text(_prevDisLikeCount);
            $('#dislikeBtn').removeAttr("disabled","disabled");
         }
      });

   })


   $('#dislikeBtn').on('click',function (e) {
      e.preventDefault();

      $.ajaxSetup({
         headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
      });

      let inputNames = $(this).serialize() // $(this) = $('#likeBtn')

      $.post($(this).attr('formaction'), inputNames, function (response) {
         if (response.disLikeStatus === 200 )
         {
            let _prevDisLikeCount = $('.dislike_count').text();
            _prevDisLikeCount++;
            $('.dislike_count').text(_prevDisLikeCount);
            $('#dislikeBtn').attr("disabled","disabled");
         }else if (response.updateStatus == 'success')
         {
            let _prevDisLikeCount = $('.dislike_count').text();
            _prevDisLikeCount++;
            $('.dislike_count').text(_prevDisLikeCount);
            $('#dislikeBtn').attr("disabled","disabled");

            let _prevLikeCount = $('.like_count').text();
            _prevLikeCount--;
            $('.like_count').text(_prevLikeCount);
            $('#likeBtn').removeAttr("disabled","disabled");
         }
      });

   })


</script>
@endsection