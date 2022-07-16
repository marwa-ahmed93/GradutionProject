

 //typing
//  var typed = new Typed('.element', {
//   strings: ['Welcome To Faculty of Engineering', 'Welcome To Faculty of Engineering'],
//   typeSpeed:200,
//   backSpeed:200,
//   loop:true,
//   backDelay: 1000,
//   showCursor: false,

// });


// jquery code to solve the problem of (dropdown menue not working)
$('.navbar-toggler').click(function(){
$('#navbarNavDropdown').toggleClass('show');

});
//end


// jquery code to solve the problem of (dropdown menue not working)
$('.dropdown').click(function(){
 $('.dropdown-menu').toggleClass('show');
})

//  active |& background color
$(".collapse ul li").click(function(){
  $(this).children().toggleClass("blue")
  $(this).siblings().children().removeClass("active")
  $(this).siblings().children().removeClass("blue")
  $(this).siblings().children().removeClass("show")
  })


  // menue
$(".login-dropdown ").mouseleave(function(){
    $(".dropdown-menu").removeClass("show")
    })
    
    $(".department-dropdown ").mouseleave(function(){
      $(".dropdown-menu").removeClass("show")
      })
    



//animate wow
new WOW().init();


//skitter
$(document).ready(function() {
  $(".skitter-large").skitter(
      {
          interval:700,
          with_animations:["tube","fade", "cubeStop","swapBarsBack","horizontal"  ],
          
      } 
  );
});