// jquery code to solve the problem of (dropdown menue not working)
$('.navbar-toggler').click(function(){

    $('#navbarNavDropdown').toggleClass('show');

});
//end
function docs(){
    document.getElementById('doc').classList.add('active');
    document.getElementById('other').classList.remove('active');
    document.getElementById('holiday').classList.add('active');
    document.getElementById('other-things').classList.remove('active');
}
function other(){
    document.getElementById('doc').classList.remove('active');
    // document.getElementById('').style.display="none";
    document.getElementById('other').classList.add('active');
    document.getElementById('holiday').classList.remove('active');
    document.getElementById('other-things').classList.add('active');
}


