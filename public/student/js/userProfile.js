// jquery code to solve the problem of (dropdown menue not working)
$('.navbar-toggler').click(function(){

    $('#navbarNavDropdown').toggleClass('show');

});
//end

//end
// jquery code to solve the problem of (dropdown menue not working)
$('.dropdown').click(function(){
    $('.dropdown-menu').toggleClass('show');
   })
 
 //  active |& background color
$(".collapse ul li").click(function(){
    $(this).children().toggleClass("blue")
    $(this).siblings().children().removeClass("blue")
    $(this).siblings().children().removeClass("active")
    $(this).siblings().children().removeClass("show")
    })
 
 
     // menue
   $(".login-dropdown ").mouseleave(function(){
    $(".dropdown-menu").removeClass("show")
    })