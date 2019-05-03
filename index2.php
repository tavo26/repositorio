<form>
	<input type="text" name="cadena">
	<button type="submit">contar </button>
</form>

<?php 
	extract($_GET);
	echo strlen($cadena)
 ?>
