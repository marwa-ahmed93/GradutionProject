// jquery code to solve the problem of (dropdown menue not working)
$('.navbar-toggler').click(function(){

    $('#navbarNavDropdown').toggleClass('show');

});
//end



//hover news
$(".parent ").mouseenter(function(){
    $(this).find(".item").css("display","none")
    $(this).find(".hover").addClass("item-hover")
})

$(".parent ").mouseleave(function(){
    $(this).find(".item").css("display","inline")
    $(this).find(".hover").removeClass("item-hover")
})

