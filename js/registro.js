$( document ).ready(function() {
  refresh();
 });
 
 function Delete(ids){
   $.ajax( {
     type: "POST",
     url: "scripts/delete.php",
     data: {"id":ids},
     success: function( response ) {
       alert(response);
       refresh();
     }
   } );
 }
 function refresh(){
   var div = document.getElementById("main");
   var user = document.getElementById("user").value;
   var lvl = document.getElementById("lvl").value;
   var id = document.getElementById("id").value;
   $.ajax( {
    type: "POST",
    url: "scripts/registro.php",
    data: {"user":user, "lvl":lvl, "id":id},
    success: function( response ) {
      div.innerHTML = response; 
    }
  } );
 }