<?php
include('config.php');
session_start();
// print_r($_SESSION);
if((!isset ($_SESSION['login']) == true) and (!isset($_SESSION['senha']  )== true)){
  unset( $_SESSION['login'] );
  unset( $_SESSION['senha']);
  header('location:index.php');
}
$logado =  $_SESSION['login'];
$resuty = mysqli_query($coat, "SELECT * FROM `produtos`;");

$DADOS = $resuty
// array(
//     'aluno1'=> array('id'=> 1 ,'nome' => 'joão', 'nota'=>8 ),
//     'aluno2'=> array('id1'=> 2 ,'nome' => 'maria', 'nota'=>6 ),
//     'aluno3'=> array('id1'=> 3 ,'nome' => 'josé', 'nota'=>10 )
// );

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>produtos</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
    body{
    font-family: Arial, Helvetica, sans-serif;
    background-image: linear-gradient(45deg,red,blue);
    text-align: center;
    color: white;
  }
  .fundo{
    background: rgba(0, 0,0,0.5);
    border-radius: 15px 15px 0 0;
  }
  </style>

</head>
<body>
<nav class="navbar navbar-dark bg-dark">
<a class="navbar-brand" href="tabela.php">
    <img src="img/android-chrome-512x512.png" width="50" height="50" class="d-inline-block align-top" alt="">
    Super Merdado
    <br>
  </a>
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
  </form>
  <div class="d-flex">
    <a
      class="btn btn-danger me-5"
      href="sair.php"
      >sair</a
    >
    
  </div>
</nav>
<br>
<?php echo "<h1>Bem vindo ".$logado."</h1>";?>
<br>
  <div class="m-3">
    <table class="table table-hover fundo ">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">nome</th>
      <th scope="col">descricao</th>
      <th scope="col">valor</th>
      <th scope="col">...</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach($DADOS as $DADOS){
        echo '<tr>';
        foreach($DADOS as $detales){
      echo "<th scope='row'><a href = '#'>".$detales."</a></th>";
        }
        echo "<th scope='row'><a class = 'btn btn-sm btn-primary'href = '#'>
        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-fill' viewBox='0 0 16 16'>
        <path d='M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z'/>
        </svg>
        </a></th>";

    echo '</tr>';
        
    }
    ?>
  </tbody>
</table>
<a
    name=""
    id=""
    class="btn btn-primary mb-2"
    href="cadastro.php"
    role="button"
    >cadastrar produtos</a
  >
</div>
</body>
</html>
