
<?php
//include("connect_db.php");

//$miconexion = new connect_db;


session_start();
	require("connect_db.php");

	$Capacitacion=$_POST['Codigo'];
	$Precio=$_POST['Precio'];


	

	$sql=mysqli_query($mysqli,"SELECT * FROM Capacitaciones WHERE codCapacitacion='$Capacitacion'");
	if($f=mysqli_fetch_assoc($sql)){
		if(($Precio==$f['Precio'])|| ($Precio<=$f['Precio'])){
			
echo '<script>alert("Su pago Fue Realizado")</script> ';
		}else {
			echo '<script>alert("Fondos Insuficientes")</script> ';
		        echo "<script>location.href='Pagos.php'</script>";
			
		}
	}

?>
