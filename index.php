<?php include('header.php');?>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Bienvenidos! al Cbtis No 128</h1>
			</div>

			<div class="articulo">
				<article>
					<img src="img/central2.jpg" alt="" class="img1">
				</article>
				<br>
				<article>
					<H3>Problema 1: Diferencia entre echo y printf</H3>
					<p>Usamos la función echo para la impresión de los resultados, y por cada línea impresa 
					deberá realizar un cambio de línea con la etiqueta. Usamos la función prinƞ para la 
					impresión de los resultados de tal forma que el cambio de línea se realiza dentro de la 
					función como un primer parámetro en la cual también se especifica el formato de impresión.
					<br> 
					Diseñar una aplicación web con PHP que permita determinar el monto total recaudado en 
					euros, a partir de tres cantidades de dinero ingresados por el usuario, como soles, 
					dólares y marcos.  
					<img src="img/echoprintf.jpg" alt="" class="img1">
					</p>
					<br/>
					<br>
					<h3>Problema 2: Funcion ISSET</h3>
					<p>Devuelve true si una variable de cualquier tipo tiene un valor asignado; hay que 
					tener en cuenta que un espacio en blanco es considerado como valor para una variable
					de tipo cadena. 
					<br>
					Validaremos el ingreso de un valor en un control TEXT, al iniciar la aplicación debe 
					mostrar el mensaje «Debe registrar un monto». Si el usuario ingresa un valor en el 
					control TEXT y presiona el botón validar, se mostrará el mensaje «Ingreso correcto». 
					<img src="img/isset.png" alt="" class="img1">
					</p>
					<br/>
					<br>
					<h3>Problema 3: Salario de empleados usando condicional simple</h3>
					<p> Diseñar una aplicación web con PHP que permita determinar el salario bruto,  
					descuento y salario neto de un empleado, el cual ingresa el número total de horas 
					trabajadas y selecciona la categoría del empleado. Esta categoría determina el costo 
					por hora del empleado.
					<img src="img/if.png" alt="" class="img1">
				
				</p>
					<br/>
					
				</article>
			</div>

        <?php include('sidebar.php');?>
		</div>
	</section>
	<?php include('footer.php');?>
</body>
</html>