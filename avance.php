<?php 
    require 'variables.php';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <link href="estilos.css" rel="stylesheet" type="text/css"/>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <head>
        <meta charset="UTF-8">
       <title><?php echo $titulo;?></title>
    </head>
    <body>
        <?php
        require 'menu.php';
        ?>
        <form action="ingavance.php" method="POST">
            Codigo:<input type="text" name="codigo" id="codigo"><br>
            M2<input type="text" name="mt2" id="mt2">
            <input type="submit" name="envio" value="Registrar">
        </form>
    </body>
    <script type="text/javascript">
        $("input").focus(function(){
            $(this).css("background-color","#cccccc");           
        });
         $("input").blur(function(){
            $(this).css("background-color","#ffffff");
        });
    </script>
</html>
