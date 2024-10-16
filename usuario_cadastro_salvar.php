<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "referencia.php" ?>
</head>
<body>

<?php 

include "header_admin.php"; 
include "footer_admin.php"; 

//1 passo miau
    include "conexao_bd.php";
    $login_usuario = $_POST["txtLoginUsuario"];
    $senha_usuario = $_POST["txtSenhaUsuario"];
    $hash = password_hash($senha_usuario, 1);
    $sql = "INSERT INTO usuario(login_usuario,senha_usuario)";
    $sql .= "VALUES('$login_usuario','$hash')";
    //executar no banco de dados                                    
    if(executarComando($sql))
    {
        echo "<h1>USUÁRIO ADICIONADO MIAU</h1>";

    }
    else{
        echo "<h1>ERRO MIAU!!!@!!!@!@!@%#%#¨$&%&%¨&%&*&¨&*</h1>";
    }

 ?>

    
</body>
</html>