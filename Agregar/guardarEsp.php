<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
      
include ("connect_db.php");
$codesp=$_POST["codesp"];
$cedula=$_POST["cedula"];


$query_insertar=  mysqli_query($mysqli, "insert into usuesp(codesp,cedula)values('".$codesp."','".$cedula."')") or die("error al insertar un resgitro informacion");
?>
<script>
    alert ("se ha guardado un nuevo resgistro");
    location.href="adminenlaces.php";
</script> 
        
    </body>
</html>
