<?php

$producto_1 = $_POST['producto_1'];
$tipo_1 = $_POST['tipo_1'];
$cantidad_1 = $_POST['cantidad_1'];
$codigo_1 = $_POST['codigo_1'];
$fecha_1 = $_POST['fecha_1'];
$observaciones_1 = $_POST['observaciones_1'];
$forma_pago_1 = $_POST['pago_1'];
$iva_1 = $_POST['iva_1'];
$precio_1 = $_POST['precio_1'];


echo('

<table width="200" border="1">
<p>Facturacion</p>
  <tbody>
 <tr>
	  <td>Producto: </td>
      <td>'.$producto_1.'</td>
    </tr>
    <tr>
	  <td>Tipo: </td>
      <td>'.$tipo_1.'</td>
    </tr>
    <tr>
	  <td>Cantidad: </td>
      <td>'.$cantidad_1.'</td>
    </tr>
    <tr>
	  <td>Código: </td>
      <td>'.$codigo_1.'</td>
    </tr>
	 <tr>
	  <td>Fecha: </td>
       <td>'.$fecha_1.'</td>
    </tr> 
	<td>Observaciones: </td>
       <td>'.$observaciones_1.'</td>
    </tr> 
	<td>Forma de Pago: </td>
       <td>'.$forma_pago_1.'</td>
    </tr> 
	</tr> 
	<td>Iva: </td>
       <td>'.$iva_1.'</td>
    </tr> 
	</tr> 
	<td>Precio Final: </td>
       <td>'.$precio_1.'</td>
    </tr> 
	
  </tbody>
</table>

');
?>