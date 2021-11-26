<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <title>Alteração de Cadastro</title>
  </head>
  <body>

  <?php
$host=gethostname();
$ip=gethostbyname($host);
echo $ip;


?>
    
<?php
include "conexao.php";
$id= $_GET['id'] ?? '';
$sql= "SELECT * FROM pessoas WHERE  cod_pessoa = $id";
$dados= mysqli_query($mysqli,$sql);
$linha= mysqli_fetch_assoc($dados);
?>

    <div class="container">
      <div class="row">
    <div class="col">
    <h1>Cadastro</h1>
    <form action="editarscript.php" method="POST">

    <div class="form-group">
    <label for="nome" class="form-label">Nome Completo</label>
    <input type="text" class="form-control" name="nome" required value="<?php echo $linha['nome'];?>">
  </div>
  <div class="form-group">
    <label for="endereco" class="form-label">Endereço</label>
    <input type="text" class="form-control" name="endereco" value="<?php echo $linha['endereco'];?>">
  </div>
  <div class="form-group">
    <label for="profissao" class="form-label">Profissão</label>
    <input type="text" class="form-control" name="profissao" value="<?php echo $linha['profissao'];?>">
  </div>
  <div class="form-group">
    <label for="telefone" class="form-label">Telefone</label>
    <input type="text" class="form-control" name="telefone" value="<?php echo $linha['telefone'];?>">
  </div>
  <div class="form-group">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" value="<?php echo $linha['email'];?>">
  </div>
  <div class="form-group">
    <label for="dt_nascimento" class="form-label">Data de nascimento</label>
    <input type="date" class="form-control" name="data_nascimento" value="<?php echo $linha['data_nascimento'];?>">
  </div>
  <div class="form-group">
    <br>
    <input type="submit" class="btn btn-success" value="Salvar Alterações">
    <input type=hidden name="id" value="<?php echo $linha['cod_pessoa'];?>">
  </div>



</form> 
<br>
<a href="index.php" class="btn btn-dark">Voltar</a>
</div>           
</div>     
</div>  



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>  
  </body>






</html>