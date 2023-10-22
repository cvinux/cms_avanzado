$(document).ready(function(){
    var root = "http://localhost/cms_avanzado/";

    try{
        ClassicEditor
        .create( document.querySelector( '#txtDescription' ) )
        .catch( error => {
            console.error( error );
        } );
    }catch(e){}

    //Log In
    $(".btnAdminLogIn").on("click",function(){
        var email = $(".txtEmailLogin").val().trim(),
            pass = $(".txtPassLogin").val().trim();

       $.ajax({
        type: "POST",
        url: root+"res/php/admin_actions/login.php",
        data: {
            email: email,
            pass: pass
        },
        success: function(data){
            if(data == "true"){
                window.location.href="http://localhost/cms_avanzado/admin/";
            }else if (data="fase"){
                alert("sus credenciales no coinciden, por favor intente de nuevo.");
            }
        }
       });
    });
});