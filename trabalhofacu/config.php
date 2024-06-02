<?php 
 $server = "localhost";
 $user = "root";
 $senha = "";
 $bdname = "mercado";

 $coat = mysqli_connect($server,$user,$senha,$bdname);
$coat = new mysqli($server, $user, $senha, $bdname);

// if($coat -> connect_errno)
// {
//     echo "erro";
// }
// else
// {
//     echo "conectado";
// }
?>