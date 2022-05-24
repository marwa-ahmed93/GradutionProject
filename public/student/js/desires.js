// jquery code to solve the problem of (dropdown menue not working)
$('.navbar-toggler').click(function(){

    $('#navbarNavDropdown').toggleClass('show');

});
//end

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
