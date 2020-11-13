<!DOCTYPE html>
<html>
 <head>
 <meta charset="UTF-8">
 <title></title>
 <?php
		include "includes/estilo.php";
	?>
 </head>
 <body>
 <?php
 include "includes/nav.php"

?>
	<section class="contenido"> 
	<article class="articulos">
	Desde una dirección de correo electrónico imprimiremos el nombre del servidor y el nombre del
usuario: 
	<figure>
						<img src="imagenes/p2.PNG" alt="">
					</figure>

<h1>el resultado es el siguiente</h1>
 <?php
 $email = 'manuel.torresr@hotmail.com';
 $servidor = substr($email, strpos($email,'@'));

 $usuario = substr($email, 0, strpos($email,'@'));
 echo 'El dominio del correo electrónico es: '.$servidor.'<br>';
 echo 'El usuario del correo electrónico es: '.$usuario;
?>
	</section> 
	</article>

 </body>
</html>