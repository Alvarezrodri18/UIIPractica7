<!DOCTYPE html>
<html>
 <head>
 <meta charset="UTF-8">
 <link rel="stylesheet" href="estilos1.css">
 <title>Diferencia entre echo y printf</title>
 </head>
 <body>
 
 <section class="ep">
 
 <h3 id="centrado">CASA DE CAMBIO</h3>
 
<form name="frmMontos"  method="POST" >
 <table border="0" cellpadding="0"
 cellspacing="0" align="center">
 <tr>
 <td width="200">Monto en soles</td>
 <td width="200">
 <input type="text" name="txtSoles" /></td>
 </tr>
 <tr>
 <td>Monto en dólares</td>
 <td><input type="text" name="txtDolares" /></td>
 </tr>
 <tr>
 <td>Monto en marcos</td>
 <td><input type="text" name="txtMarcos" /></td>
 </tr>
 <tr>
 <td><button type="submit" value="Procesar" class="Boton" >Procesar</button></td>
 <td><button type="reset" value="Limpiar" class="Boton2">Limpiar</button></td>
 </tr>
 <?php
 error_reporting(0);
 $soles=$_POST['txtSoles'];
 $dolares=$_POST['txtDolares'];
 $marcos=$_POST['txtMarcos'];
 $euros=(($soles/3.51)+$dolares+($marcos/2.12))*1.09;
 ?>
 <tr>
 <td>
 Total soles<br>
 Total dólares<br>
 Total marcos<br>
 Monto total en Euros
 </td>
 <td>
 <?php 
 echo "S/. ".number_format($soles, 2)."<br>";
 echo "$ ".number_format($dolares, 2)."<br>";
 echo number_format($marcos, 2)." DEM<br>";
 echo number_format($euros, 2)." euros";
 ?>
 </td>
 </tr>
 </table>
 </form>
 </section>
 
 </body>
</html>