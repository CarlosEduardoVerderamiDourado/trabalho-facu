<?php
 include("config.php");
if(isset($_POST['enviar']))
{
//   print_r($_POST['nome']);
//   print_r($_POST['senha']);
//   print_r($_POST['ddt']);
  $nome = $_POST['nome'];
  $ddt = $_POST['ddt'];
  $cargo = $_POST['cargo'];
  $senha = $_POST['senha'];
  $resuty = mysqli_query($coat, "insert into funcionario(Nome,ddt,cargo,senha) 
  values ('$nome','$ddt','$cargo','$senha');");
  header('location:index.php');

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>fcadastro de usuario</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="estilo.css">
  <style>
    body{
    font-family: Arial, Helvetica, sans-serif;
    background-image: linear-gradient(45deg,red,blue);
  }
     .cadastro{
     background-color:rgba(123,104,238, 0.8);
     position: absolute;
     top: 50%;
     left: 50%;
     transform: translate(-50%,-50%);
     padding: 40px;
     border-radius: 20px;
     color: #000;
   }
   </style> 
</head>
<body >
<div class="p-3 mb-2 bg-transparent text-dark"></div>
    <div class="cadastro">
    <form action="cadastrousuario.php" method="POST">
    <fieldset>
                <legend>cadastro usuario</legend>
  <div class="form-group">
    <input type="texto" name="nome" class="form-control" id="exampleInputEmail1" aria-describedby="name" placeholder="name">
  </div>
  <br>
  <div class="form-group">
    <input type="password"  name="senha"class="form-control" id="exampleInputPassword1" placeholder="Senha">
  </div>
  <div class="form-group">
  <label for="data_nascimento">Data de Nascimento</label>
<input type="date" name="ddt" id="data_nascimento"class="form-control" required>
   </div>
   <br>
   <div class="form-group">
<input type="texto" name="cargo" class="form-control" id="exampleInputEmail1" aria-describedby="cargo" placeholder="cargo">
  </div>
  <br>
  <button type="submit" name="enviar" class="btn btn-primary mb-3">Enviar</button>
  </fieldset>
</form>
    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!--http://localhost/trabalhofacu/cadastrousuario.php -->

</body>
</html>