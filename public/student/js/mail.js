// jquery code to solve the problem of (dropdown menue not working)
$('.navbar-toggler').click(function(){

  $('#navbarNavDropdown').toggleClass('show');

});
//end

function message(){
    document.getElementById('main').style.display="flex";
    document.getElementById('cut').style.display="none";

}
function openSlideMenu(){
  document.getElementById('side-menu').style.width='100px';

}
function closeSlideMenu(){
      document.getElementById('side-menu').style.width='0px';
      document.getElementById('main').style.marginLeft='0px';

}
