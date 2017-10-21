<form method="post" action="" >
  <fieldset>
    <legend  style="font-size: 18pt"><b>Registro</b></legend>
    <div class="form-group">
      <label style="font-size: 14pt"><b>Ingresa tu nombre</b></label>
      <input type="text" name="realname" class="form-control" placeholder="Ingresa tu Nombre" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt"><b>Ingresa tu Cedula</b></label>
      <input type="text" name="cedula" class="form-control" placeholder="Ingresa tu Cedula" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt"><b>Ingresa Cargo</b></label>
      <input type="text" name="rol" class="form-control" placeholder="Ingresa tu Cargo" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt; "><b>Ingresa tu email</b></label>
      <input type="text" name="nick" class="form-control"  required placeholder="Ingresa Email"/>
    </div>
    <div class="form-group">
      <label style="font-size: 14pt;"><b>Ingresa tu Password</b></label>
      <input type="password" name="pass" class="form-control"  placeholder="Ingresa Contraseña" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt"><b>Repite tu contraseña</b></label>
      <input type="password" name="rpass" class="form-control" required placeholder="Repite Contraseña" />
    </div>
      
    </div>
   
    <input  class="btn btn-danger" type="submit" name="submit" value="Registrarse"/>
    <a href="Login2Banco.php">
        <img src="images/Pagos.png" alt="#" width="100" height="100" title="Pagar Pse"/>
	  		 </a> 
  </fieldset>
</form>
</div>

<a href="Login2Banco.php">
    </a>
<?php
		if(isset($_POST['submit'])){
			
                    require("registroCapa.php");
		
                        
                }
	?>
<!--Fin formulario registro -->

		</td>
		</tr>
		</table>
		</div></center></div></center>


	
</body>
</html>