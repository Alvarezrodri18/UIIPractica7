<?php include('header.php');?>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>DIFERENCIAS ENTRE ECHO Y PRINTF</h1>
			</div>

			<div class="articulo">
				<article>
					
					<?php
					include('P7_Alvarez_01_php/diferencia.php');
					?>
					<br> <br>
					<h1>Explicacion del problema</h1>
					<br><br>
					<p>
					Se capturan los valores registrados en los controles del formulario por medio de la 
					función $_POST. Usamos la función echo para la impresión de los resultados, y por cada 
					línea impresa deberá realizar un cambio de línea con la etiqueta br. La función 
					number_format permite preformatear un número de tal manera que se muestre con
					dos decimales para todo valor monetario.
					Usamos la función prinƞ para la impresión de los resultados de tal forma que el cambio 
					de línea se realiza dentro de la función como un primer parámetro en la cual también se 
					especifica el formato de impresión como: <br>
					"%.2F" donde ".2" es para especifi car a cuántos decimales imprimirá el resultado y como
					segundo parámetro el valor a mostrar.
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
