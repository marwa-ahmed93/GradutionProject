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

// change passwerd
  //Begin supreme heuristics 
$('.password').on('keyup',function (){
    var p_c = $('#p-c');
    var p = $('#p');
if(p.val().length > 0){
    if(p.val() != p_c.val()) {
        $('#valid').html("Passwords Don't Match");
    } else {
        $('#valid').html('');  
    }
    var s = 'weak'
    if(p.val().length > 5 && p.val().match(/\d+/g))
    s = 'medium';
    if(p.val().length > 6 && p.val().match(/[^\w\s]/gi))
    s = 'strong';   
    $('#strong span').addClass(s).html(s);
    }
});


