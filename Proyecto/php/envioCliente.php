<?php


$cedula = $_POST['ced'];
$nombre = $_POST['nombre'];
$fecha = $_POST['fnac'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$correo = $_POST['email'];
$estado = $_POST['estado'];

echo('
<table width="200" border="1">
<p>Información del Cliente</p>
  <tbody>
 <tr>
	  <td>Cédula: </td>
      <td>'.$cedula.'</td>
    </tr>
    <tr>
	  <td>Nombres Completos: </td>
      <td>'.$nombre.'</td>
    </tr>
    <tr>
	  <td>Fecha de Nacimiento: </td>
      <td>'.$fecha.'</td>
    </tr>
    <tr>
	  <td>Dirección: </td>
      <td>'.$direccion.'</td>
    </tr>
	 <tr>
	  <td>Telefono: </td>
       <td>'.$telefono.'</td>
    </tr> 
	<td>Email: </td>
       <td>'.$correo.'</td>
    </tr> 
	<td>Estado Civil: </td>
       <td>'.$estado.'</td>
    </tr> 
	
  </tbody>
</table>

	
  </tbody>
</table>

');
?>