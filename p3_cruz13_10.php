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
 include "includes/nav.php";
?>
<section class="contenido"> 
	<article class="articulos">
<?php
 error_reporting(0);

 $alumno=$_POST['txtAlumno'];
 $categoria=$_POST['selCategoria'];
 $promedio=$_POST['txtPromedio'];

 if ($categoria=='A') $selA='SELECTED'; else $selA="";
 if ($categoria=='B') $selB='SELECTED'; else $selB="";
 if ($categoria=='C') $selC='SELECTED'; else $selC="";
 if ($categoria=='D') $selD='SELECTED'; else $selD="";

 $mAlumno='';
 $mCategoria='';
 $mPromedio='';
 if (empty($alumno))
 $mAlumno='Debe registrar nombre del alumno';
 if($categoría=='seleccione')
 $mCategoria='Debe seleccionar una categoría';
 if(empty($promedio) || !is_numeric($promedio))
 $mPromedio='Debe registrar correctamente el promedio';
 elseif($promedio<0 || $promedio>20)
 $mPromedio='El promedio debe estar entre 0 y 20';
 ?>
 <section>
 <form name="frmUniversidad" method="POST"
 action="Universidad.php">
 <table border="0" width="800" cellspacing="0"
 cellpadding="0" aling="center">
 <tr>
 <td width="200">Nombre completo del alumno</td>
 <td width="400"><input type="text"
 name="txtAlumno" size="50"
 value="<?php echo $alumno; ?>" />
 </td>
 <td width="200" id="error">
 <?php echo $mAlumno; ?>
 </td>
 </tr>
 <tr>
 <td>Seleccione categoría</td>
 <td><select name="selCategoria">
 <option value="seleccione" SELECTED>
 Seleccione categoria</option>
 <option value="A" <?php echo $selA;?> >A</option>
 <option value="B" <?php echo $selB;?> >B</option>
 <option value="C" <?php echo $selC;?> >C</option>
 <option value="D" <?php echo $selD;?> >D</option>
 </select></td>
 <td id="error"><?php echo $mCategoria; ?></td>
 </tr>
 <tr>
 <td>Ingrese promedio</td>
 <td><input type="text" name="txtPromedio"
 value="<?php echo $promedio; ?>" /></td>
 <td id="error"><?php echo $mPromedio; ?></td>
 </tr>
 <tr>
 <td></td>
 <td>
 <input type="submit" value="Procesar"
 name="btnProcesar"/>
 </td>
 </tr>
 <?php
 if($categoria=='A')
 $monto=850;
 elseif ($categoria=='B')
 $monto=750;
 elseif ($categoria=='C')
 $monto=650;
 elseif ($categoria=='D')
 $monto=500;
 else
 $monto=0;

 if ($promedio<=12)
 $descuento=0;
 elseif ($promedio<=15)
 $descuento=10.0/100.0 * $monto;
 elseif ($promedio<=17)
 $descuento=15.0/100.0 * $monto;
 elseif ($promedio<=19)
 $descuento=25.0/100.0 * $monto;
 elseif ($promedio==20)
 $descuento=50.0/100.0 * $monto;

 $montoCancelar=$monto-$descuento;
 ?>
 <tr>
 <td>Monto mensualidad</td>
 <td><?php echo '$ '.number_format($monto,2,'.',''); ?></td>
 </tr>
 <tr>
 <td>Monto descuento</td>
 <td><?php echo '$ '.number_format($descuento,2,'.','');?></td>
 </tr>
 <tr>
 <td>Monto a cancelar</td>
 <td>
 <?php echo '$ '.number_format($montoCancelar,2,'.',''); ?>
 </td>
 </tr>
 </table>
 </form>
 </section>
				</article>
		</section>
		<?php
			include "includes/footer.php";
		?>
</body>
</html>