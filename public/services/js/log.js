


function emailValid(){
    var email=$("#email").val();

    
    if( email==""){
        $(".form-groupEmail").css('border-bottom',' 1px solid red');
    }else{
      
        $(".form-groupEmail").css('border-bottom',' 1px solid  #337ab7');

    
    }
}


function PassValid(){
    var password=$('#pass').val();
    if( password==""){
        $(".form-groupPass").css('border-bottom',' 1px solid red');
    }else{
        $(".form-groupPass").css('border-bottom',' 1px solid #337ab7');
    
    }

}




$("#logbtn").click( function(){
    emailValid();
    //callback
    $("#email").click(function(){
        $(".form-groupEmail").css('border-bottom',' 1px solid #337ab7');
    })

    PassValid();
    //callback
    $("#pass").click(function(){
    $(".form-groupPass").css('border-bottom',' 1px solid #337ab7');

   })
    


})


//forget pass

   
$("#restBtn").click(function(){

    emailValid();
   
        //callback
        $("#email").click(function(){
            $(".form-groupEmail").css('border-bottom',' 1px solid #337ab7');
        })
        

})



////////////// login
$("#logBtn").click(function(){
   
    emailValid();
        //callback
        $("#email").click(function(){
            $(".form-groupEmail").css('border-bottom',' 1px solid #337ab7');
        })

        PassValid();
        //callback
        $("#pass").click(function(){
        $(".form-groupPass").css('border-bottom',' 1px solid #337ab7');
       })

}
)