<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <title>Pago de Empleados</title>
 <link href="estilo3.css" rel="stylesheet">
</head>
<body>

 
 
 <section class="ep">
 <h2 id="centrado">PAGO DE SALARIO DE EMPLEADOS</h2>
 <img src="img/empleado.jpg" width="600" height="150" />
 <?php
 error_reporting(0);

 $empleado=$_POST['txtEmpleado'];
 $categoria=$_POST['selCategoria'];
 $horas=$_POST['txtHoras'];

 if ($categoria=='Jefe')
 $selJ='SELECTED'; 
 else
 $selJ="";
 if ($categoria=='Administrativo')
 $selA='SELECTED';
 else
 $selA="";
 if ($categoria=='Operario')
 $selO='SELECTED';
 else
 $selO="";
 if ($categoria=='Practicante')
 $selP='SELECTED';
 else
 $selP="";
 ?>
 <form method="POST" name="frmSalario" >
 <table border="0" cellspacing="0" cellpadding="0" >
 <tr>
 <td width="150">Empleado</td>
 <td><input type="text" name="txtEmpleado" size="70"
 value="<?php echo $empleado; ?>" />
 </td>
 </tr>
 <tr>
 <td>Horas</td>
 <td><input type="text" name="txtHoras"
 value="<?php echo $horas; ?>" /></td>
 </tr>
 <tr>
 <td>Categoria</td>
 <td>
 <select name="selCategoria">
 <option value="Jefe" <?php echo $selJ;?> >Jefe</option>
 <option value="Administrativo" <?php echo $selA; ?> >
 Administrativo </option>
 <option value="Operario" <?php echo $selO; ?> >
 Operario</option>
 <option value="Practicante" <?php echo $selP; ?> >
 Practicante</option>
 </select>
 </td>
 </tr>
 <tr>
 <td></td>
 <td>
 <button type="submit" value="Calcular"
 name="btnCalcular" class="Boton">Calcular </button>
 <button type="reset" value="Limpiar controles"
 name="btnLimpiar" class="Boton">Limpiar controles</button>
 </td>
 </tr>
 <?php
 if ($categoria=='Jefe') $pagoHora=50;
 if ($categoria=='Administrativo') $pagoHora=30;
 if ($categoria=='Operario') $pagoHora=15;
 if ($categoria=='Practicante') $pagoHora=5;

 $sBruto=$pagoHora*$horas;
 $descuento=$sBruto*15.0/100.0;
 $sNeto=$sBruto-$descuento;
 ?>
 <tr>
 <td>Salario Bruto</td>
 <td>
 <?php echo "$ ".number_format($sBruto, 2,'.','');?>
 </td>
 </tr>
 <tr>
 <td>Descuento</td>
 <td>
 <?php echo "$ ".number_format($descuento,2,'.',''); ?>
 </td>
 </tr>
 <tr>
 <td>Salario Neto</td>
 <td>
 <?php echo "$ ".number_format($sNeto,2,'.','');?></td>
 </tr>
 </table>
 </form>
 </section>
 
 
</body>
</html>