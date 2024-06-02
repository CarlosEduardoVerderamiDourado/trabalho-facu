<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Login</title>
</head>
<body>
    
<?php
session_start();
 include("config.php");

if(isset ($_POST['login']) && isset($_POST['senha'])){

    $login = $coat->real_escape_string($_POST['login']);
    $senha = $coat->real_escape_string($_POST['senha']);

    $sql = "SELECT * FROM funcionario WHERE Nome ='$login' and senha = '$senha'";
    $result = $coat ->query($sql);
    if(mysqli_num_rows($result)<1)
    {
        // print_r('nao existe');
        unset( $_SESSION['login'] );
        unset( $_SESSION['senha']);
        header('location: index.php');
    }
    else
    {
        $_SESSION['login'] = $login;
        $_SESSION['senha'] = $senha;
        // print_r('existe');
        header('location: tabela.php');
    }

}
?>
</body>
</html>