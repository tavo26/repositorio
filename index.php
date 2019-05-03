<form action ="index.php" method="post">

	<input type="number" name="cantidad" />
	<input type="number" name="cantidad1" />
	<input type="number" name="cantidad2" />
	<input type="number" name="cantidad3" />
	<input type="number" name="cantidad4" />
	<input type="number" name="cantidad5" />

	<button type="submit">Enviar</button>
	</form>

<?php  
	
	echo "Listado de 0 hasta:",$_POST['cantidad5'];
	echo": <br />";
	echo $_POST['cantidad1'], "<br />";
	echo $_POST['cantidad2'], "<br />";
	echo $_POST['cantidad3'], "<br />";
	echo $_POST['cantidad4'], "<br />";
	echo $_POST['cantidad5'], "<br />";

extract($_POST);
echo "Listado desde 0 hasta"; $cantidad5;
echo" <br />;
echo $cantidad1,"br />";
echo $cantidad2,"br />";
echo $cantidad3,"br />";
echo $cantidad4,"br />";
 ?>