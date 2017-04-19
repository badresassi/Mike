<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>exercice</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <h1>EXERCICE TABLEAU</h1>
  </head>
  <body>
    <div class="tableau">
      <table id="table">

      </table>
    </div>
    <script>
    $(function() {
      var request = $.ajax({
        url: "https://jsonplaceholder.typicode.com/users",
        method: "GET",
      });
      request.done(function(mike){
        var table ="<tr>";
        $.each(mike[0], function(index, value){
          if(index == "name" ||index == "username" ||index == "email" ||index == "phone" ||index == "company"){
            table += "<th>";
            table += index;
            table += "</th>";
          }
        });
        table += "</tr>";
        for (var i = 0; i < mike.length; i++){
          $.each(mike[i], function(index, value){
            table += "<td>";
            if(index == "company"){
              table += value.name;
            }else{
            table += value;
          };
            table += "</td>";
         })
         table += "</tr>";
       };
       table += "</tr>";
       $("#table").html(table);
      });
      request.fail(function(XPDDR, data){
        alert("request fail !")
      });
    });
    </script>
  </body>
</html>
