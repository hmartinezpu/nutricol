<?php
include 'conexion.php';

$codigo=$_POST['vcod'];

$con=conexion();
$consulta=mysqli_query($con,"SELECT * FROM usuario WHERE cc='".$codigo."'");

$e=mysqli_fetch_array($consulta);
?>
<table width="100" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <th scope="col" align="left">Nombres</th>
  </tr>
  <tr>
    <td><form name="form1" method="post" action="">
     
      <input type="text" name="textfield" required pattern="[a-zA-Z]*" id="nombre" value="<?php echo $e['nombres'] ?> " required>
    </form></td>
  </tr>
  <tr>
    <th scope="col" align="left">Apellidos</th>
  </tr>
  <tr>
    <td><form name="form2" method="post" action="">
     
      <input type="text" name="textfield2" id="apellido" value="<?php echo $e['apellidos'] ?>" required pattern="[a-zA-Z]*"  required>
    </form></td>
  </tr>
  <tr>
    <th scope="col" align="left">CC</th>
  </tr>
  <tr>
    <td><form name="form3" method="post" action="">
    
      <input type="number" name="textfield3" id="cc" value="<?php echo $e['cc'] ?>" required>
    </form></td>
  </tr>
  <tr>
    <th scope="col" align="left">Correo</th>
  </tr>
  <tr>
    <td><form name="form4" method="post" action="">
    
      <input type="email" name="textfield4" id="correo" value="<?php echo $e['correo'] ?>" required>
    </form></td>
  </tr>
  <tr>
    <th scope="col" align="left">Celular</th>
  </tr>
  <tr>
    <td><form name="form5" method="post" action="">
      
      <input type="number" name="textfield5" id="celular" value="<?php echo $e['celular'] ?>" min="3001111111" max="3219999999" required>
    </form></td>
  </tr>
  <tr>
    <th scope="col" align="left">Talla</th>
  </tr>
  <tr>
    <td><form name="form6" method="post" action="">
     
      <input type="number" step="0.01" name="talla" min="0.5" max="2.50" name="textfield3" id="talla" value="<?php echo $e['talla'] ?>" required>
    </form></td>
  </tr>
  <tr>
    <th scope="col" align="left">Masa Corporal</th>
  </tr>
  <tr>
    <td><form name="form7" method="post" action="">
     
      <input type="number" step="0.01" name="textfield3" id="masac" value="<?php echo $e['masacorporal'] ?>">
    </form></td>
  </tr>
  <tr>
      <td><input type="submit" name="button" id="button" value="Editar" onclick="Guardaredicion(<?php echo $e['cc']?>)"> </td>
  </tr>
</table>
