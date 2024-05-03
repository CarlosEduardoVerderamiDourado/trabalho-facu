<?php

if(isset ($_POST['login']) && isset($_POST['senha'])){

    $login = $coat->real_escape_string($_POST['login']);
    $senha = $coat->real_escape_string($_POST['senha']);

    $sql = "SELECT * FROM usuarios WHERE login ='$login' and senha = '$senha'";

    $sql_query = $coat->query($sql);
    $result=$sql_query->fetch_assoc();

    if($sql_query->num_rows){
        session_start();
        $_SESSION['login'] = $result['login'];

        $sql = "SELECT * FROM produtos";
        $result = $coat->query($sql);
        
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo
                "<br>ID: " . $row["id"].
                "<br>Produto: " . $row["produto"].
                "<br>Preço: " . $row["preco"];
            }
        } else {
            echo "o resultados encontrados";
        }
        
    }else{
        echo "Usuário não encontrado!";
    }
}
?>
<br>
<br>
<a href="index.php"><button>Voltar ao Ínicio</button></a>
