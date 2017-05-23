<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
         <div align='left'><h1>Creacíon de Especializaciones Docentes</h1></div>
         <form name="form1" id="form1" method="post" action="guardarEsp.php">
<!-- formulario registro -->

<form method="post" action="" >
  <fieldset>
    <legend  style="font-size: 18pt"><b>Registro</b></legend>
    <div class="form-group">
      <label style="font-size: 14pt"><b>Ingresa Codigo Especializacion</b></label>
      <input type="text" name="CodEsp" class="form-control" placeholder="Ingresa tu Especializacion" />
    </div>
      <div class="form-group">
      <label style="font-size: 14pt"><b>Cedula</b></label>
      <input type="text" name="Cedula" class="form-control" required placeholder="Ingresa Cedula" />
    </div>
      
    </div>
   
    <input  class="btn btn-danger" type="submit" name="submit" value="Registrarse"/>

  </fieldset>
</form>
</div>
<?php
		if(isset($_POST['submit'])){
			require("../Agregar/guardarEsp.php");
		}
	?>
<!--Fin formulario registro -->

		</td>
		</tr>
		</table>
		</div></center></div></center>

	
</body>
</html>