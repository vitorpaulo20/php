<?php
    $servidor= "localhost";
    $usuario= "root";
    $senha= "";
    $dbname="dafonte";
    $host="localhost";
    $port= 3306;
    
    //conexão com banco de dados

try{    
    $conn=new PDO("mysql:host=$host;port=$port;dbname=" . $dbname, $usuario, $senha);
  //  echo "conexão com banco realizada com sucesso !!!";

} catch(PDOException $err){
echo "Erro conexão com banco de dados não foi realizado com sucesso . Erro gerado " . $err->getMessage();
}


?>