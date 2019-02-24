<?php

$frase ="A repetição é a mãe da retenção";

$palavra = "mãe";

$q = strpos($frase, "mãe");

$texto = substr($frase, 0, $q);


$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));


var_dump($texto2);
//var_dump($texto);
//var_dump($q);


?>