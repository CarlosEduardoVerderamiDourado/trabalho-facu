<?php
  include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <style>
    body{
    font-family: Arial, Helvetica, sans-serif;
    background-image: linear-gradient(45deg,red,blue);
  }
  </style> 

    <title>Login</title>

</head>
<body class="body">
<div class="p-3 mb-2 bg-transparent text-dark"></div>
  <div class="telalogin">
 <form class="form-inline"action="logado.php" method="POST" >
  <label class="sr-only" for="inlineFormInputName2"></label>
  <input type="text" class="form-control mb-2" name="login" id="inlineFormInputName2" placeholder="Nome">

  <label class="sr-only" for="inlineFormInputGroupUsername2"></label>
  <div class="input-group mb-2 mr-sm-2">
    <div class="input-group-prepend">
    </div>
    <input type="password" class="form-control mb-2" name="senha" id="inlineFormInputGroupUsername2" placeholder="password">
  </div>

  <div class="form-check mb-2 mr-sm-2">
    <input class="form-check-input" type="checkbox" id="inlineFormCheck">
    <label class="form-check-label" for="inlineFormCheck">
      Lembrar de mim
    </label>
  </div>
  <button type="submit" class="btn btn-primary mb-2">Entrar</button>
  <!-- <button type="submit" href="cadastrousuario.php"class="btn btn-primary mb-2">cadastrar</button> -->

  <a
    name=""
    id=""
    class="btn btn-primary mb-2"
    href="cadastrousuario.php"
    role="button"
    >cadastrar</a
  >
  
</form>
    
    <!--<button class="enviar">entra</button>-->
    <!--body{
    font-family: Arial, Helvetica, sans-serif;
    background-image: linear-gradient(45deg,red,blue);
  }-->
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>