<html>
<head>
	<link rel="stylesheet" type="text/css" href="animacion.css">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body style="background: <?php echo $_GET['color']; ?> ">	
	<div class="CajaInicio animated flash" >
		<form id="FormIngreso" action="Estacionamiento\Nexo.php" method="post">
			<input type="text" name="color" placeholder="elija color de fondo"> 
			<input type="text" name="patente"> 
			<br>
			<input type="submit" name="accion" class="MiBotonUTN" value="estacionar">
			<input type="submit" name="accion" class="MiBotonUTN" value="sacar">
		</form>
	</div>

	<!-- 
	//Los estilos de los ID son mas jerarquicos q los de clase, el explorador prioriza el estilo del id por sobre el de la clase
	//El estilo que mayor jerarquia tiene es el que priorizo en el objeto, sea una clase o un estilo por id.
	//<body style="background: <?php echo $_GET['color']; ?> "> puedo envever codigo asi


	-->
</body>
</html>
