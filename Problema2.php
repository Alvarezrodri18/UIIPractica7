<?php include('header.php');?>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>FUNCION ISSET</h1>
			</div>

			<div class="articulo">
				<article>
				<?php
					include('P7_Alvarez_01_php/isset.php');
					?>
					<br> <br>
					<h1>Explicacion del problema</h1>
					<br>
					<p>
					if (isset($_POST['txtMonto'])) evalúa si se ingresó algún valor en el control TEXT, 
					de acuerdo al que se ingrese se asignará uno u otro comentario a la variable $mensaje 
					y esta se imprimirá en la celda contigua al control TEXT del monto. Hay que considerar 
					que la evaluación realizada solo controla si la variable ti ene algún valor, no
					necesariamente numérico.
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