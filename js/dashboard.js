function refresh(){
    var div = document.getElementById("Resultados");
    var select = document.getElementById("select");
    var date = document.getElementById("date").value;
    if(date==""){
        date="null";
    }
    if(select.value!=-1){
    $.ajax( {
     type: "POST",
     url: "scripts/dash.php",
     data: {"user":select.value, "date":date},
     success: function( response ) {
       div.innerHTML = response; 
     }
   } );
  }
}