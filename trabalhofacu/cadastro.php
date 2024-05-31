<?php
if(isset($_POST['submit']))
{
  //print_r($_POST['Nome do Produto']);
  //print_r($_POST['valor']);
  //print_r($_POST['descricao']);
  include_once('config.php');
  $nome = $_POST['nomedoproduto'];
  $valor = $_POST['valor'];
  $descricao = $_POST['descricao'];
  $resuty = mysqli_query($coat, "insert into produtos(NomedoProduto,descrição,valor) 
  values ('$nome','$descricao','$valor');");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>formulario</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="estilo.css">
  <style>
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
      <form action="cadastro.php" method="$_POST">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Nome do Produto</span>
            </div>
            <input type="text" class="form-control" placeholder="Nome do Produto" name="nomedoproduto" aria-label="Nome do Produto" 
            aria-describedby="basic-addon1">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">R$</span>
            </div>
            <input type="text" class="form-control" name="valor" aria-label="Quantia">
            <div class="input-group-append">
              <span class="input-group-text">.00</span>
            </div>
          </div>
          
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">Descriçao do Produto</span>
            </div>
            <textarea class="form-control" name="descricao" aria-label="Com textarea"></textarea>
          </div>
          <button type="submit" name="enviar" class="btn btn-primary mb-3">Enviar</button>
      </form>
    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!--http://localhost/trabalhofacu/cadastro.html-->
</body>
</html>