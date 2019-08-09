
function POSTF(formId){
    var str="#"+formId;
    var form = $(str);
      $.ajax( {
        type: "POST",
        url: form.attr( 'action' ),
        data: form.serialize(),
        success: function( response ) {
          if (response==1)
          window.location = "index";
          else {
          document.getElementById("error").innerHTML='<div class="alert alert-danger" role="alert"> Usuario o contraseña incorrectos</div>';
          }
        }
      } );
}