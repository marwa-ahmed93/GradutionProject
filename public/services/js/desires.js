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
    $(this).siblings().children().removeClass("blue")
    $(this).siblings().children().removeClass("active")
    $(this).siblings().children().removeClass("show")
    })
 
 
     // menue
   $(".login-dropdown ").mouseleave(function(){
    $(".dropdown-menu").removeClass("show")
    })

// SELECT
function showDiv(select){
    if(select.value== "Primary"){
        document.getElementById('primForm').style.display = "block";
    } else{
        document.getElementById('primForm').style.display = "none";
    };
    if(select.value== "Electrical"){
        document.getElementById('electricForm').style.display = "block";
    } else{
        document.getElementById('electricForm').style.display = "none";
    }
    
}
