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
    });

// upload photo--> toggel between photo and span(camera icon)
const inpFile = document.getElementById("inpFile");
const previewContainer = document.getElementById("imagePreview");
const previewImage = previewContainer.querySelector(".image-preview--image");
const previewDefaultText = previewContainer.querySelector (".image-preview--default-text");
inpFile.addEventListener ("change", function() {
    const file = this.files[0];
    if (file) {
        const reader = new FileReader ();
        previewDefaultText.style.display = "none";
        previewImage.style.display = "block";
        reader.addEventListener ("load", function() {
        previewImage.setAttribute("src", this.result);
        });
        reader.readAsDataURL (file);
    } else {
    previewDefaultText.style.display = null;
    previewImage.style.display = null;
    previewImage.setAttribute("src", "");
    }
});