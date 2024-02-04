<?php

$cedula_1 = $_POST['ced_1'];
$nombre_1 = $_POST['nombre_1'];
$direccion_1 = $_POST['direccion_1'];
$telefono_1 = $_POST['telefono_1'];
$correo_1 = $_POST['email_1'];


echo('

<table width="200" border="1">
<p>Información del Proveedor</p>
  <tbody>
 <tr>
	  <td>Cédula: </td>
      <td>'.$cedula_1.'</td>
    </tr>
    <tr>
	  <td>Nombres Completos: </td>
      <td>'.$nombre_1.'</td>
    </tr>
    <tr>
	  <td>Dirección: </td>
      <td>'.$direccion_1.'</td>
    </tr>
	 <tr>
	  <td>Telefono: </td>
       <td>'.$telefono_1.'</td>
    </tr> 
	<td>Email: </td>
       <td>'.$correo_1.'</td>
    
	
  </tbody>
</table>





');
?>