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
         <button class="btn btn-sm btn-outline-success"
                 @if($likeStatus = \App\Models\LikesDislike::where('post_id',$postDetail->id)->where('user_id',\Illuminate\Support\Facades\Auth::user()->id)->first())
                     @if($likeStatus->type == 'like') disabled @endif
                 @endif

                 id="likeBtn" formaction="{{ route('post.like',$postDetail->id) }}">
            <i class="fas fa-thumbs-up"></i>
            Like <span class="like_count">{{ $like->count() }}</span>
         </button>

         <button class="btn btn-sm btn-outline-danger"
                 @if($likeStatus = \App\Models\LikesDislike::where('post_id',$postDetail->id)->where('user_id',\Illuminate\Support\Facades\Auth::user()->id)->first())
                      @if($likeStatus->type == 'dislike') disabled @endif
                 @endif
         id="dislikeBtn" formaction="{{ route('post.dislike',$postDetail->id) }}">
            <i class="fas fa-thumbs-down"></i>
            Dislike <span class="dislike_count">{{ $dislike->count() }}</span>
         </button>

         <button id="commentBtn" class="btn btn-sm btn-outline-secondary">
            <i class="fas fa-comment"></i>
            Comment <span class="comment-count">{{ $comments->count() }}</span>
         </button>

         {{---------- Comment Box ----------}}
         <div class="mt-4" id="commentBox" >

            <p class="bg-secondary text-center py-2 text-white">Post a comment</p>
            <p class="my-4">
               <i><span class="comment-count">{{ $comments->count() }}</span> comments</i>
            </p>
            {{---------- Show Comment ----------}}
            <div class="comment-list">
               @foreach($comments as $comment)
               <div class="row mb-3">
                  <div class="col-12">
                     <div class="d-flex align-items-start">
                        <div class="d-inline-block">
                           <img src="{{ isset($comment->User->photo ) ? asset('storage/user-img/'.$comment->User->photo) : asset('images/default_user.png') }}" alt="" class="user-img">
                        </div>

                        <div class="d-inline-block ms-3 w-100">
                           <h6 class="text-capitalize fw-bold mb-0">{{ $comment->User->name }}</h6>
                           <small class="text-black-50">{{ $postDetail->created_at }}</small>
                           <hr class="comment-dashed-line" style="margin: 7px 0; border-bottom: 1px dashed #d6d6d6">
                           <p>{{ $comment->text }}</p>
                        </div>
                     </div>
                  </div>
               </div>
               @endforeach
            </div>

            <hr>
            {{---------- Add Comment ----------}}
            <div class="row align-items-center">
               <div class="col-12 col-md-8">
                  <div class="d-flex justify-content-between align-items-center">
                     <img src="{{ isset(\Illuminate\Support\Facades\Auth::user()->photo ) ? asset('storage/user-img/'.\Illuminate\Support\Facades\Auth::user()->photo) : asset('images/default_user.png') }}" alt="" class="user-img">
                     <div class="">
                        <h6 class="fw-bolder mb-0">Comment as:
                           <span class="fw-normal ms-3">
                              {{ \Illuminate\Support\Facades\Auth::user()->email }}
                           </span>
                        </h6>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-md-4">
                  <form method="POST" action="{{ route('logout') }}">
                     @csrf
                     <a class="btn btn-sm btn-danger float-end" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                         this.closest('form').submit();">
                        Sign Out
                     </a>
                  </form>
               </div>

               <div class="row">
                  <div class="col-12">
                     <textarea class="form-control comment-area text" name="text"
                               placeholder="Enter your comment..." rows="5" autofocus></textarea>
                     <small class="comment-error fw-bold text-danger"></small>
                  </div>
               </div>
            </div>
            <hr>
            <button data-post="{{ $postDetail->id }}" data-time="{{ $postDetail->created_at }}" data-name="{{ \Illuminate\Support\Facades\Auth::user()->name }}"
                    data-image="{{ isset(\Illuminate\Support\Facades\Auth::user()->photo ) ? asset('storage/user-img/'.\Illuminate\Support\Facades\Auth::user()->photo) : asset('images/default_user.png') }}"
                    class="btn btn-sm btn-info fw-bold float-end add-comment">
               Publish
            </button>
         </div>

      </div>
      @endif
   </div>
<!---------- Single Blog Posts ------------>
@endsection

@section('script')
<script>

   $('.add-comment').on('click',function (e) {
      e.preventDefault();

      let _comment = $(".text").val();
      let _post = $(this).data('post');
      let _time = $(this).data('time');
      let _name = $(this).data('name');
      let _image = $(this).data('image');
      let _vm = $(this);

      $.ajaxSetup({
         headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
      });

      $.ajax({
         type: 'POST',
         url: "{{ url('save-comments') }}",
         dataType: 'json',
         data:{
            text:_comment,
            post:_post,
            time:_time,
            name:_name
         },
         beforeSend:function(){
            _vm.text('Publishing...').addClass('disabled');
         },
         success:function (response) {
            if (response.status === 400)
            {
               $('.comment-error').append(response.errors.text);
               $('.text').addClass('is-invalid');
               _vm.text('Publish').removeClass('disabled');
            }
            else
            {
               let _html =
                  '<div class="row mb-3">' +
                     '<div class="col-12">' +
                        '<div class="d-flex align-items-start">' +
                           '<div class="d-inline-block">' +
                              '<img src="'+_image+'" alt="" class="user-img">' +
                           '</div>' +
                           '<div class="d-inline-block ms-3 w-100">' +
                              '<h6 class="text-capitalize fw-bold mb-0">'+_name+'</h6>' +
                              '<small class="text-black-50">'+_time+'</small>' +
                              '<hr class="comment-dashed-line" style="margin: 7px 0; border-bottom: 1px dashed #d6d6d6;">' +
                              '<p>'+_comment+'</p>'+
                           '</div>'+
                        '</div>' +
                     '</div>' +
                  '</div>';

               if (response.bool==true)
               {
                  $(".comment-list").prepend(_html);
                  let commentCount = $('.comment-count').html();
                  commentCount++;
                  $('.comment-count').html(commentCount);
                  $(".text").val('');
               }
               _vm.text('Publish').removeClass('disabled');
            }
         }
      });


      // $.post($(this).attr('formaction'), data, function (response) {
      //    console.log(response);
      //
      //    if (response.status === 400)
      //    {
      //       $('.comment-error').append(response.errors.text);
      //       $('.text').addClass('is-invalid');
      //    }
      //    else
      //    {
      //
      //    }
      // });
   });

{{--   @endforeach--}}






   /*----- Like Function -----*/
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
            let _prevLikeCount = $('.like_count').html();
            _prevLikeCount++;
            $('.like_count').html(_prevLikeCount);
            $('#likeBtn').attr("disabled","disabled");
         }
         else if (response.updateStatus == 'success')
         {
            let _prevLikeCount = $('.like_count').html();
            _prevLikeCount++;
            $('.like_count').html(_prevLikeCount);
            $('#likeBtn').attr("disabled","disabled");

            let _prevDisLikeCount = $('.dislike_count').html();
            _prevDisLikeCount--;
            $('.dislike_count').html(_prevDisLikeCount);
            $('#dislikeBtn').removeAttr("disabled","disabled");
         }
      });

   })

   /*----- Dislike Function -----*/
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
            let _prevDisLikeCount = $('.dislike_count').html();
            _prevDisLikeCount++;
            $('.dislike_count').html(_prevDisLikeCount);
            $('#dislikeBtn').attr("disabled","disabled");
         }
         else if (response.updateStatus == 'success')
         {
            let _prevDisLikeCount = $('.dislike_count').html();
            _prevDisLikeCount++;
            $('.dislike_count').html(_prevDisLikeCount);
            $('#dislikeBtn').attr("disabled","disabled");

            let _prevLikeCount = $('.like_count').html();
            _prevLikeCount--;
            $('.like_count').html(_prevLikeCount);
            $('#likeBtn').removeAttr("disabled","disabled");
         }
      });

   })


</script>
@endsection