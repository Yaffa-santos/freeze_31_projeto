<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "referencia.php" ?>
</head>
<body>
    <?php 
   include"conexao_bd.php";
   $login_usuario = $_POST["txtLoginUsuario"];
   $senha_usuario = $_POST["txtSenhaUsuario"];
   $sql = "SELECT * FROM usuario";
   $sql .= "WHERE login_usuario = '$login_usuario'";
   $dados = retornarDados($sql);
   if ($dados == 0)
   {
    echo "<h1>IMPOSTOR </h1>";
   }
   else{
    header("location:index_admin.php");
       }

   ?>    
</body>
</html>