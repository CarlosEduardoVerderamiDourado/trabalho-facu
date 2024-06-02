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
    <table class="table table-hover ">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">nome</th>
      <th scope="col">descricao</th>
      <th scope="col">valor</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach($DADOS as $DADOS){
        echo '<tr>';
        foreach($DADOS as $detales){
      echo "<th scope='row'><a href = '#'>".$detales."</a></th>";
        }
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
