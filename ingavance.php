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
    <head>
        <meta charset="UTF-8">
        <title><?php echo $titulo;?></title>
    </head>
    <body>
        <?php
        require 'menu.php';
        ?>
        <h1 class="titpag">Registro de información</h1>
        Usted a ingresado la siguiente información:
        <?php
        $codigo=$_POST["codigo"];
        ?>
        <b>Codigo:</b><?=$codigo;?>
    </body>
</html>



