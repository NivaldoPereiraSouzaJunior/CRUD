<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <title>Exclusão de Cadastro</title>
  </head>
  <body>
  <?php
$host=gethostname();
$ip=gethostbyname($host);
echo $ip;


?>
    <div class="container">
      <div class="row">
<?php
include "conexao.php";
$id= $_POST['id'];
$nome=$_POST['nome'];



$sql= ("DELETE FROM pessoas WHERE cod_pessoa=$id");
if( mysqli_query($mysqli,$sql)){
   mensagem("$nome Excluido com sucesso!",'sucess');
} else
mensagem("$nome Não Excluido!",'danger');
?>
<a href="index.php" class="btn btn-primary">Voltar</a>
</div>     
</div>  


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>  
    
  </body>
</html>