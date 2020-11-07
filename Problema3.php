<?php include('header.php');?>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Salario de empleados usando condicional simple</h1>
			</div>

			<div class="articulo">
				<article>
				<?php
					include('P7_Alvarez_01_php/salario.php');
					?>
					<br> <br>
					<h1>Explicacion del problema</h1>
					<br>
					<p>
					Para evitar error usamos la instrucción error_reporƟ ng(0). Luego capturamos los valores
ingresados por el usuario en los controles del formulario usando la función $_POST. Finalmente, capturamos 
los valores de los controles usando la función $_POST como el nombre
del empleado, categoría del empleado y las horas trabajadas. Ahora asignaremos el pago, por hora, según 
la categoría seleccionada, Se ha
evaluado una a una las categorías.
Luego se calcula en salario bruto ($sBruto), descuento ($descuento); recuerde que este se
divide con 15.0/100.0 para asegurar un valor fraccionario y finalmente el salario neto ($sNeto). 
<br> <br>

					</p>
				</article>
			</div>

        <?php include('sidebar.php');?>
		</div>
	</section>
	<?php include('footer.php');?>
</body>
</html>