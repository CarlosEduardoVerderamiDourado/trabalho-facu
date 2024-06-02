<?php 
 $server = "localhost";
 $user = "root";
 $senha = "";
 $bdname = "mercado";

 $coat = mysqli_connect($server,$user,$senha,$bdname);
$coat = new mysqli($server, $user, $senha, $bdname);
// if ($coat->connect_error) {
//     die("Conexão falhou: " . $coat->connect_error);
//     echo "erro";
// }
// else
// {
//     echo "conectado";
// }
// ?>