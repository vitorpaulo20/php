<form>

<input type="text" name="nome">
<input type="date" name="nascimento">
<input type="submit" value= "OK">

</form>

<?php

	if(isset($_GET)){
		foreach ($_GET as $key => $value){

		echo "<br>"."Nome do campo" ."<br>". $key;

		echo "<br>"."Valor do campo" ."<br>".$value;

		echo "<br>"."<hr>";

		}
	}
?>