<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Proyectos</title>
	<?php
		include "includes/estilo.php";
	?>
</head>
<body>
	<?php
		include "includes/header.php";
		include "includes/nav.php";
		include "includes/slider.php";
	?>
	<section class="contenido"> 
	<article class="articulos">
				<h3>Problema 1 de CRUZ PASCUAL YARETZI</h3>
				
					<figure>
						<img src="imagenes/c.png" alt="">
					</figure>
					<h4>P1 Resultado del codigo</h4>
					<?php
			$clave = 'Sócrates';
			$iClave = 'socrateS';

 		if (strcmp($clave, $iClave)==0)
 		echo 'La clave es correcta';
 		else
 			echo 'La clave NO es correcta';
?>
<p class="parra">
		Para declarar una constante
		 (variable cuyo valor no podrá ser modificado)
		  utilizaremos la función define(), escribiendo 
		  el nombre en mayúsculas (según la nomenclatura estándar) 
		  y sin usar el símbolo '$' en el nombre:

		
						
					</p>
					</article>
		</section>
		<?php
			include "includes/footer.php";
		?>
</body>
</html>