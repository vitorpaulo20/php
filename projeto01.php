<?php
header("Content-Type: text/html; charset=UTF-8");


    $servidor= "localhost";
    $usuario= "root";
    $senha= "";
    $dbname="dafonte";
    
    //conexão com banco de dados
    
    $conn=mysqli_connect($servidor, $usuario, $senha, $dbname);

    if(!$conn){
    die("Falha na conexao" . mysqli_connect_error());
    }else{
    echo "conexao realizada com sucesso<br><br><hr>";
    }



    //Cadastrar usuario 

        $email = $_GET['emailInput'];
        $senha = $_GET['senhaInput'];
    
       
        if(isset($_GET['emailInput'])) {
            echo $_GET['emailInput']. ("<br>");
        }
    
        if(isset($_GET['senhaInput'])) {
            echo $_GET['senhaInput'].("<br><hr>");

        }


        
        



        $result_usuarios = "INSERT INTO login (EMAIL, SENHA) VALUES ('$email', '$senha')";

        $resultado_usuario = mysqli_query($conn, $result_usuarios);
        
        
        if(mysqli_insert_id($conn)){
        
            echo("cadastrou");
            
        
        }else{
        
        echo("não cadastrou");
        
        }
       
       
    


   





 

    
    ?>