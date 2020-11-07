<!DOCTYPE html>
<html>
 <head>
 <meta charset="UTF-8">
 <title>Validaciones</title>
 <link href="estilo2.css" rel="stylesheet">
 </head>
 <body>
 
 
 
 <section class="ep">
 <h2 id="centrado">Validacion usando ISSET</h2>
 <?php
 error_reporting(0);
 if(isset($_POST['txtMonto'])){
 $mensaje='Ingreso correcto';
 }else{
 $mensaje='Debe registrar un monto';
 }
 ?>
 <form name="frmValida" method="POST">
 <table border="0" width="300"
 cellspacing="0" cellpadding="0">
 <tr>
 <td width="100">Ingrese monto</td>
 <td width="200">
 <input type="text" name="txtMonto"
 value="<?php echo $_POST['txtMonto'];?>"/>
 </td>
 <td width="400"><?php echo $mensaje; ?></td>
 </tr>
 <tr>
 <td></td>
 
 <td><button type="submit" value="Validar" class="Boton">Validar</button></td>
 <td></td>
 </tr>
 
 </table>
 </form>
 </section>
 </body>
</html>