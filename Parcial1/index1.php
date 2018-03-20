<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>


        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

       
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript"></script>

    <script language="javascript" type="text/javascript">
        function message1(){

            var tipoJS = $("#tarjeta").val();
           
            var numtJS =$('#ntarjeta').val();


           
             $.post("ValidaTarjeta.php",{"tipo":tipoJS,"numerot":numtJS},function(respuesta1){
                alert(respuesta1);
            });

          
           

        }
    </script>




   
    </head>
    <body>
        <form name="registro" method="post" action="archivo.php">
            Nombre: <input type="text" id="Nombre" name="Nombre"><br><br> 
            Apellido: <input type="text" id="Apellido" name="Apellido"><br><br>
            Ciudad: <select name="pais" id="pais" name="pais" onchange="message()">
               <option>Selecciona un pais...</option>
                    <?php
 
                        include ("paises.php");
                    ?>
                                   
            </select><br><br>
           
            Email: <input type="text" name="email" id="email"> <br><br>
            Tipo Tarjeta: <select name="tarjeta" id="tarjeta">
               <option>Selecciona un tipo...</option>
                <option value="VISA">
                    VISA
                </option>
                <option value="MASTERCARD">
                    MASTERCARD 
                </option>
                <option value="DINERS">
                    DINERS 
                </option>
                <option value="AMEX">
                    AMEX
                </option>
            </select><br><br>

            Numero Tarjeta: <input type="text" name="ntarjeta" id="ntarjeta" onchange="message1()" ><br><br>

            Usuario: <input type="text" name="user" id="user"><br><br>

            Clave: <input type="password" name="pass" id="pass"><br><br>

            <input type="submit" value="Submit">


        </form>
        
  
       
    </body>
</html>
