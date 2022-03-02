function mostrar(){
    $.ajax({
        type : "POST",
        url : "CRUD/menu.php",
        data : "",
        success : function(cont) {
            $("#contenido").html(cont);
           
        }
      });
     
    
}


function Reg()
{
    $.ajax({
        type : "POST",
        url : "CRUD/nuevo.php",
        data : "",
        success : function(cont) {
            $("#contenido").html(cont);
          
        }
      });
}
function Act()
{
    $.ajax({
        type : "POST",
        url : "CRUD/menu.php",
        data : "",
        success : function(cont) {
            $("#contenido").html(cont);
          
        }
      });
}
function Elim()
{
    $.ajax({
        type : "POST",
        url : "CRUD/menu.php",
        data : "",
        success : function(cont) {
            $("#contenido").html(cont);
          
        }
      });
}