<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <title>Cadastro!</title>
  </head>
  <body>
    
  <?php
$host=gethostname();
$ip=gethostbyname($host);
echo $ip;


?>

    <div class="container">
      <div class="row">
    <div class="col">
    <h1>Cadastro</h1>
    <form action="cadastro_script.php" method="POST">

    <div class="form-group">
    <label for="nome" class="form-label">Nome Completo</label>
    <input type="text" class="form-control" name="nome" required>
  </div>
  <div class="form-group">
    <label for="endereco" class="form-label">Endereço</label>
    <input type="text" class="form-control" name="endereco">
  </div>
  <div class="form-group">
    <label for="profissao" class="form-label">Profissão</label>
    <input type="text" class="form-control" name=profissao>
  </div>
  <div class="form-group">
    <label for="telefone" class="form-label">Telefone</label>
    <input type="text" class="form-control" name=telefone>
  </div>
  <div class="form-group">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" name=email>
  </div>
  <div class="form-group">
    <label for="dt_nascimento" class="form-label">Data de nascimento</label>
    <input type="date" class="form-control" name=data_nascimento>
  </div>
  <div class="form-group">
    <br>
    <input type="submit" class="btn btn-success">
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