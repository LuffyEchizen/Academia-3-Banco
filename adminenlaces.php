<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Factor Docentes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Lucas Padilla">

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>
<body data-offset="40" background="images/fondotot.jpg" style="background-attachment: fixed">
<div class="container">
<header class="header">
<div class="row">
	<?php
	include("include/cabecera.php");
	?>
</div>
</header>

  <!-- Navbar
    ================================================== -->

<div class="navbar">
  <div class="navbar-inner">
	<div class="container">
	  <div class="nav-collapse">
		<ul class="nav">
			<li class=""><a href="admin.php">ADMINISTRADOR DEL SITIO</a></li>
                       
			 
	
		</ul>
		<form action="#" class="navbar-search form-inline" style="margin-top:9px">
		
		</form>
		<ul class="nav pull-right">
                    <li><a href="Login.php"> Cerrar Cesión </a></li>			 
		</ul>
	  </div><!-- /.nav-collapse -->
	</div>
  </div><!-- /navbar-inner -->
</div>

<!-- ======================================================================================================================== -->
<div class="row">
	
	
		
	<div class="span12">

		<div class="caption">
		
<!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->
		<h2> Administrar Base De Datos Factor Docentes</h2>	
					<div class="span12">
				<div class="well well-small">
					<h3>Especializaciones</h3>
					<div class="row">
	
	
		
	<div class="span12">

		<div class="caption">
		
<!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->
		<h4> Administración de Especializaciones</h4>	
		<div class="well well-small">
		<hr class="soft"/>
		<h4>Tabla de Especializacion</h4>
		<div class="row-fluid">
		



			<?php

				require("connect_db.php");
				$sql=("SELECT * FROM especializaciones");
	
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
				$query=mysqli_query($mysqli,$sql);

				echo "<table border='1'; class='table table-hover';>";
					echo "<tr class='warning'>";
						echo "<td><h5>Codigo Especializacion</h5></td>";
						echo "<td><h5>Especializacion</h5></td>";
                                                echo "<td><h5>Agregar</h5></td>";
                                                echo "<td><h5>Editar</h5></td>";
                                                echo "<td><h5>Eliminar</h5></td>";
						
					echo "</tr>";

			    
			?>
			  
			<?php 
				 while($arreglo=mysqli_fetch_array($query)){
				  	echo "<tr class='success'>";
				    	echo "<td>$arreglo[0]</td>";
				    	echo "<td>$arreglo[1]</td>";
                                        echo "<td><a href='Agregar/AgregarEspecializaciones.php?id=$arreglo[0]'><img src='images/a15.jpg' class='img-rounded'></td>";
                                        echo "<td><a href='actualizar.php?id=$arreglo[0]'><img src='images/actualizar.gif' class='img-rounded'></td>";
						echo "<td><a href='admin.php?id=$arreglo[0]&idborrar=2'><img src='images/eliminar.png' class='img-rounded'/></a></td>";
				    							
					echo "</tr>";
				}

				echo "</table>";
			?>
			<div class="span8">
		
		</div>	
		</div>	
         
		<br/>
                <div class="span12">
				<div class="well well-small">
					<h3>Docentes Especializaciones</h3>
					<div class="row">
	
	
		
	<div class="span12">

		<div class="caption">
		
<!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->
		<h4> Administración de Docentes Especializaciones</h4>	
		<div class="well well-small">
		<hr class="soft"/>
		<h4>Tabla de Usuarios Especializacion</h4>
		<div class="row-fluid">
		



			<?php

				require("connect_db.php");
				$sql=("select e.codespecializacion,i.especializacion,e.cedula,j.nombre1,j.apellido1 from usuesp e , usuarios j, especializaciones i where
e.cedula=j.cedula and e.codespecializacion=i.codespecializacion ");
	                         
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
				$query=mysqli_query($mysqli,$sql);

				echo "<table border='1'; class='table table-hover';>";
					echo "<tr class='warning'>";
						echo "<td><h5>Codigo Especializacion</h5></td>";
                                                echo "<td><h5>Especializacion</h5></td>";
						echo "<td><h5>Cedula</h5></td>";
                                                echo "<td><h5>Nombre</h5></td>";
                                                echo "<td><h5>Apellido</h5></td>";
                                                echo "<td><h5>Agregar</h5></td>";
                                                echo "<td><h5>Editar</h5></td>";
                                                echo "<td><h5>Eliminar</h5></td>";
						
					echo "</tr>";

			    
			?>
			  
			<?php 
				 while($arreglo=mysqli_fetch_array($query)){
				  	echo "<tr class='success'>";
				    	echo "<td>$arreglo[0]</td>";
				    	echo "<td>$arreglo[1]</td>";
                                        echo "<td>$arreglo[2]</td>";
                                        echo "<td>$arreglo[3]</td>";
                                        echo "<td>$arreglo[4]</td>";
                                        echo "<td><a href='Agregar/AgregarEspecializaciones.php?id=$arreglo[0]'><img src='images/a15.jpg' class='img-rounded'></td>";
                                        echo "<td><a href='actualizar.php?id=$arreglo[0]'><img src='images/actualizar.gif' class='img-rounded'></td>";
						echo "<td><a href='admin.php?id=$arreglo[0]&idborrar=2'><img src='images/eliminar.png' class='img-rounded'/></a></td>";
				    							
					echo "</tr>";
				}

				echo "</table>";
			?>
			<div class="span8">
		
		</div>	
		</div>	
         
		<br/>
		</div>


		<h3>Tutorias</h3>
		<div class="row">
		<div class="span12">
		<div class="caption">
		<h4> Administración de Tutorias</h4>	
		<div class="well well-small">
		<hr class="soft"/>
		<h4>Tabla de tutorias</h4>
		<div class="row-fluid">
		<?php

				require("connect_db.php");
				$sql=("SELECT * FROM tutorias");
				$query=mysqli_query($mysqli,$sql);

				echo "<table border='1'; class='table table-hover';>";
					echo "<tr class='warning'>";
						echo "<td><h5>Codigo Tutorias</h5></td>";
						echo "<td><h5>Dia</h5></td>";
                                                echo "<td><h5>Hora inicial</h5></td>";
                                                echo "<td><h5>Hora Final</h5></td>";
                                                echo "<td><h5>Agregar</h5></td>";
                                                echo "<td><h5>Editar</h5></td>";
                                                echo "<td><h5>Eliminar</h5></td>";
						echo "</tr>";
                                    ?>
			<?php 
				 while($arreglo=mysqli_fetch_array($query)){
				  	echo "<tr class='success'>";
				    	echo "<td>$arreglo[0]</td>";
				    	echo "<td>$arreglo[1]</td>";
                                        echo "<td>$arreglo[2]</td>";
                                        echo "<td>$arreglo[3]</td>";
                                        echo "<td><a href='Agregar/AgregarEspecializaciones.php?id=$arreglo[0]'><img src='images/a15.jpg' class='img-rounded'></td>";
				    	 echo "<td><a href='actualizar.php?id=$arreglo[0]'><img src='images/actualizar.gif' class='img-rounded'></td>";
						echo "<td><a href='admin.php?id=$arreglo[0]&idborrar=2'><img src='images/eliminar.png' class='img-rounded'/></a></td>";						
					echo "</tr>";
				}
				echo "</table>";
			?>
		<div class="span8">
		</div>	
		</div>	
                  <div class="span12">
				<div class="well well-small">
					<h3>Cursos Tutorias</h3>
					<div class="row">
	
	
		
	<div class="span12">

		<div class="caption">
		
<!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->
		<h4> Administración de Cursos Tutorias</h4>	
		<div class="well well-small">
		<hr class="soft"/>
		<h4>Tabla de Cursos Tutorias</h4>
		<div class="row-fluid">
		



			<?php

				require("connect_db.php");
				$sql=("SELECT codcurso,codtutoria FROM curtu ");
	                         
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
				$query=mysqli_query($mysqli,$sql);

				echo "<table border='1'; class='table table-hover';>";
					echo "<tr class='warning'>";
						echo "<td><h5>Codigo Curos</h5></td>";
						echo "<td><h5>Codigo Tutorias</h5></td>";
                                                echo "<td><h5>Agregar</h5></td>";
                                                echo "<td><h5>Editar</h5></td>";
                                                echo "<td><h5>Eliminar</h5></td>";
						
					echo "</tr>";

			    
			?>
			  
			<?php 
				 while($arreglo=mysqli_fetch_array($query)){
				  	echo "<tr class='success'>";
				    	echo "<td>$arreglo[0]</td>";
				    	echo "<td>$arreglo[1]</td>";
                                        echo "<td><a href='Agregar/AgregarEspecializaciones.php?id=$arreglo[0]'><img src='images/a15.jpg' class='img-rounded'></td>";
                                        echo "<td><a href='actualizar.php?id=$arreglo[0]'><img src='images/actualizar.gif' class='img-rounded'></td>";
						echo "<td><a href='admin.php?id=$arreglo[0]&idborrar=2'><img src='images/eliminar.png' class='img-rounded'/></a></td>";
				    							
					echo "</tr>";
				}

				echo "</table>";
			?>
			<div class="span8">
		
		</div>	
		</div>	
         
		<br/>
		</div>
		<br/>
		</div>

					<h3>Cursos</h3>
						<div class="row">
		<div class="span12">
		<div class="caption">
		<h4> Administración de Cursos</h4>	
		<div class="well well-small">
		<hr class="soft"/>
		<h4>Tabla de Cursos</h4>
		<div class="row-fluid">
		<?php

				require("connect_db.php");
				$sql=("SELECT * FROM cursos");
				$query=mysqli_query($mysqli,$sql);

				echo "<table border='1'; class='table table-hover';>";
					echo "<tr class='warning'>";
						echo "<td><h5>Codigo Curso</h5></td>";
						echo "<td><h5>Cedula</h5></td>";
                                                echo "<td><h5>Curso</h5></td>";
                                               echo "<td><h5>Agregar</h5></td>";
                                                echo "<td><h5>Editar</h5></td>";
                                                echo "<td><h5>Eliminar</h5></td>";
                                                echo "</tr>";
                                    ?>
			<?php 
				 while($arreglo=mysqli_fetch_array($query)){
				  	echo "<tr class='success'>";
				    	echo "<td>$arreglo[0]</td>";
				    	echo "<td>$arreglo[1]</td>";
                                        echo "<td>$arreglo[2]</td>";
                                        echo "<td><a href='Agregar/AgregarEspecializaciones.php?id=$arreglo[0]'><img src='images/a15.jpg' class='img-rounded'></td>";
                                        echo "<td><a href='actualizar.php?id=$arreglo[0]'><img src='images/actualizar.gif' class='img-rounded'></td>";
						echo "<td><a href='admin.php?id=$arreglo[0]&idborrar=2'><img src='images/eliminar.png' class='img-rounded'/></a></td>";	
					echo "</tr>";
				}
				echo "</table>";
			?>
		<div class="span8">
		</div>	
		</div>	
		<br/>
		</div>

					<h3>Contratos</h3>
						<div class="row">
		<div class="span12">
		<div class="caption">
		<h4> Administración de Contratos</h4>	
		<div class="well well-small">
		<hr class="soft"/>
		<h4>Tabla de Contratos</h4>
		<div class="row-fluid">
		<?php

				require("connect_db.php");
				$sql=("SELECT * FROM contratos");
				$query=mysqli_query($mysqli,$sql);

				echo "<table border='1'; class='table table-hover';>";
					echo "<tr class='warning'>";
						echo "<td><h5>Numero De Contrato</h5></td>";
						echo "<td><h5>Cedula</h5></td>";
                                                echo "<td><h5>Tipo</h5></td>";
                                                echo "<td><h5>Salario Base</h5></td>";
                                                echo "<td><h5>Fecha inicial</h5></td>";
                                                echo "<td><h5>Fecha Final</h5></td>";
                                                echo "<td><h5>Agregar</h5></td>";
                                                echo "<td><h5>Editar</h5></td>";
                                                echo "<td><h5>Eliminar</h5></td>";
						echo "</tr>";
                                    ?>
			<?php 
				 while($arreglo=mysqli_fetch_array($query)){
				  	echo "<tr class='success'>";
				    	echo "<td>$arreglo[0]</td>";
				    	echo "<td>$arreglo[1]</td>";
                                        echo "<td>$arreglo[2]</td>";
                                        echo "<td>$arreglo[3]</td>";
                                        echo "<td>$arreglo[4]</td>";
                                        echo "<td>$arreglo[5]</td>";
                                        echo "<td><a href='Agregar/AgregarEspecializaciones.php?id=$arreglo[0]'><img src='images/a15.jpg' class='img-rounded'></td>";
                                          echo "<td><a href='actualizar.php?id=$arreglo[0]'><img src='images/actualizar.gif' class='img-rounded'></td>";
						echo "<td><a href='admin.php?id=$arreglo[0]&idborrar=2'><img src='images/eliminar.png' class='img-rounded'/></a></td>";	
				    							
					echo "</tr>";
				}
				echo "</table>";
			?>
		<div class="span8">
		</div>	
		</div>	
		<br/>
		</div>
					<h3>Horarios</h3>
					<div class="row">
		<div class="span12">
		<div class="caption">
		<h4> Administración de Horarios</h4>	
		<div class="well well-small">
		<hr class="soft"/>
		<h4>Tabla de Horarios</h4>
		<div class="row-fluid">
		<?php

				require("connect_db.php");
				$sql=("SELECT * FROM horarios");
				$query=mysqli_query($mysqli,$sql);

				echo "<table border='1'; class='table table-hover';>";
					echo "<tr class='warning'>";
						echo "<td><h5>Codigo Horarios</h5></td>";
						echo "<td><h5>Dia</h5></td>";
                                                echo "<td><h5>Hora inicial</h5></td>";
                                                echo "<td><h5>Hora Final</h5></td>";
                                               echo "<td><h5>Agregar</h5></td>";
                                                echo "<td><h5>Editar</h5></td>";
                                                echo "<td><h5>Eliminar</h5></td>";
						echo "</tr>";
                                    ?>
			<?php 
				 while($arreglo=mysqli_fetch_array($query)){
				  	echo "<tr class='success'>";
				    	echo "<td>$arreglo[0]</td>";
				    	echo "<td>$arreglo[1]</td>";
                                        echo "<td>$arreglo[2]</td>";
                                        echo "<td>$arreglo[3]</td>";
                                        echo "<td><a href='Agregar/AgregarEspecializaciones.php?id=$arreglo[0]'><img src='images/a15.jpg' class='img-rounded'></td>";
                                          echo "<td><a href='actualizar.php?id=$arreglo[0]'><img src='images/actualizar.gif' class='img-rounded'></td>";
						echo "<td><a href='admin.php?id=$arreglo[0]&idborrar=2'><img src='images/eliminar.png' class='img-rounded'/></a></td>";	
				    							
					echo "</tr>";
				}
				echo "</table>";
			?>
		<div class="span8">
		</div>	
		</div>	
             <div class="span12">
				<div class="well well-small">
					<h3>Cursos Horarios</h3>
					<div class="row">
	
	
		
	<div class="span12">

		<div class="caption">
		
<!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->
		<h4> Administración de Cursos Horarios</h4>	
		<div class="well well-small">
		<hr class="soft"/>
		<h4>Tabla de Cursos Horarios</h4>
		<div class="row-fluid">
		



			<?php

				require("connect_db.php");
				$sql=("SELECT codcurso,codhorario FROM curhora ");
	                         
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
				$query=mysqli_query($mysqli,$sql);

				echo "<table border='1'; class='table table-hover';>";
					echo "<tr class='warning'>";
						echo "<td><h5>Codigo Cursos</h5></td>";
						echo "<td><h5>Codigo Horarios</h5></td>";
                                                echo "<td><h5>Agregar</h5></td>";
                                                echo "<td><h5>Editar</h5></td>";
                                                echo "<td><h5>Eliminar</h5></td>";
						
					echo "</tr>";

			    
			?>
			  
			<?php 
				 while($arreglo=mysqli_fetch_array($query)){
				  	echo "<tr class='success'>";
				    	echo "<td>$arreglo[0]</td>";
				    	echo "<td>$arreglo[1]</td>";
                                        echo "<td><a href='Agregar/AgregarEspecializaciones.php?id=$arreglo[0]'><img src='images/a15.jpg' class='img-rounded'></td>";
                                        echo "<td><a href='actualizar.php?id=$arreglo[0]'><img src='images/actualizar.gif' class='img-rounded'></td>";
						echo "<td><a href='admin.php?id=$arreglo[0]&idborrar=2'><img src='images/eliminar.png' class='img-rounded'/></a></td>";
				    							
					echo "</tr>";
				}

				echo "</table>";
			?>
			<div class="span8">
		
		</div>	
		</div>	
         
		<br/>
		</div>
		<br/>
		</div>

				                                       
                                        <h3>Facultades</h3>
					<div class="row">
                                        <div class="span12">
                                        <div class="caption">
                <h4> Administración de Facultades</h4>	
		<div class="well well-small">
		<hr class="soft"/>
		<h4>Tabla de Facultades</h4>
		<div class="row-fluid">
		<?php

			require("connect_db.php");
			$sql=("SELECT * FROM facultades");
			$query=mysqli_query($mysqli,$sql);

				echo "<table border='1'; class='table table-hover';>";
					echo "<tr class='warning'>";
						echo "<td><h5>Codigo Facultades</h5></td>";
						echo "<td><h5>Facultades</h5></td>";
                                                echo "<td><h5>Agregar</h5></td>";
                                                echo "<td><h5>Editar</h5></td>";
                                                echo "<td><h5>Eliminar</h5></td>";
						
					echo "</tr>";
		    
			?>
			  
			<?php 
				 while($arreglo=mysqli_fetch_array($query)){
				  	echo "<tr class='success'>";
				    	echo "<td>$arreglo[0]</td>";
				    	echo "<td>$arreglo[1]</td>";
                                        echo "<td><a href='Agregar/AgregarEspecializaciones.php?id=$arreglo[0]'><img src='images/a15.jpg' class='img-rounded'></td>";
                                          echo "<td><a href='actualizar.php?id=$arreglo[0]'><img src='images/actualizar.gif' class='img-rounded'></td>";
						echo "<td><a href='admin.php?id=$arreglo[0]&idborrar=2'><img src='images/eliminar.png' class='img-rounded'/></a></td>";	
				    							
					echo "</tr>";
				}

				echo "</table>";
			?>
			<div class="span8">
		
		</div>	
		</div>	
                <div class="span12">
				<div class="well well-small">
					<h3>Docentes Facultades</h3>
					<div class="row">
	
	
		
	<div class="span12">

		<div class="caption">
		
<!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->
		<h4> Administración de Docentes Facultades</h4>	
		<div class="well well-small">
		<hr class="soft"/>
		<h4>Tabla de Usuarios Facultades</h4>
		<div class="row-fluid">
		



			<?php

				require("connect_db.php");
				$sql=("select u.codfacultad,u.cedula,j.nombre1,j.apellido1 from usufac u , usuarios j where
u.cedula=j.cedula ");
	                         
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
				$query=mysqli_query($mysqli,$sql);

				echo "<table border='1'; class='table table-hover';>";
					echo "<tr class='warning'>";
						echo "<td><h5>Codigo Facultad</h5></td>";
						echo "<td><h5>Cedula</h5></td>";
                                                echo "<td><h5>Nombre</h5></td>";
                                                echo "<td><h5>Apellido</h5></td>";
                                              
						
					echo "</tr>";

			    
			?>
			  
			<?php 
				 while($arreglo=mysqli_fetch_array($query)){
				  	echo "<tr class='success'>";
				    	echo "<td>$arreglo[0]</td>";
				    	echo "<td>$arreglo[1]</td>";
                                        echo "<td>$arreglo[2]</td>";
                                        echo "<td>$arreglo[3]</td>";
                                       				
					echo "</tr>";
				}

				echo "</table>";
			?>
			<div class="span8">
		
		</div>	
		</div>	
         
		<br/>
		</div>

		<br/>
		</div>

				</div>
			</div>
		
			
			
</div>

		


		

<!--///////////////////////////////////////////////////Termina cuerpo del documento interno////////////////////////////////////////////-->
</div>

	</div>
</div>
<!-- Footer
      ================================================== -->
<hr class="soften"/>
<footer class="footer">

<hr class="soften"/>
<p>&copy; Copyright Lucas Padilla, Cristian Castaño <br/><br/></p>
 </footer>
</div><!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
	</style>
  </body>
</html>