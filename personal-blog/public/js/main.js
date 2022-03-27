// let screenHeight = $(window).height();
//
// $(window).scroll( () => {
//    let currentPosition = $(this).scrollTop();
//    if (currentPosition >= screenHeight){
//       $('.site-nav').addClass('site-nav-scroll');
//    }else {
//       $('.site-nav').removeClass('site-nav-scroll');
//    }
// });

$('#blogMenuToggle').on('click',function () {
   $('.blog-menu-inner').slideToggle();
});

$('#commentBtn').on('click',function () {
   $('#commentBox').slideToggle();
})
