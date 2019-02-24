<?php
$total =10000;
$desconto = 5;

do{


	$total *= $desconto;
	
}while($total > 100);

echo $total;

?>