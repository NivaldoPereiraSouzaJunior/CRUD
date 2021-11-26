<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <title>Pesquisar</title>
  </head>
  <body>

  <?php
$host=gethostname();
$ip=gethostbyname($host);
echo $ip;


?>
   <?php
   $pesquisa=$_POST['busca'] ?? '';
   include "conexao.php";
   $sql= "SELECT * FROM pessoas WHERE nome LIKE '%$pesquisa%'";
$dados= mysqli_query($mysqli,$sql);
?>

    <div class="container">
      <div class="row">
    <div class="col">
    <h1>Pesquisar</h1>
    <nav class="navbar navbar-light bg-light">
  <form class="form-inline "action="pesquisa.php" method="POST">
    <input class="form-control mr-sm-2" type="search" placeholder="Nome" aria-label="Search" name="busca" autofocus>
    <br>
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
  </form>
</nav>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Endereço</th>
      <th scope="col">Telefone</th>
      <th scope="col">Profissão</th>
      <th scope="col">Email</th>
      <th scope="col">Data de Nascimento</th>
      <th scope="col">Função</th>
    </tr>
  </thead>
  <tbody>
  <?php
while ($linha= mysqli_fetch_assoc($dados)){
    $cod_pessoa=$linha['cod_pessoa'];
    $nome=$linha['nome'];
    $endereco=$linha['endereco'];
    $telefone=$linha['telefone'];
    $profissao=$linha['profissao'];
    $email=$linha['email'];
    $data_nascimento=$linha['data_nascimento'];
    $data_nascimento=mostra_data($data_nascimento);

    echo "<tr>
    <th scope='row'>$nome</th>
    <td>$endereco</td>
    <td>$telefone</td>
    <td>$profissao</td>
    <td>$email</td>
    <td>$data_nascimento</td>
    <td width=150px>
    <a href='editar.php?id=$cod_pessoa' class='btn btn-success btn-sm'>Editar</a>
    </td>
    <td>
    </td>
  </tr>";


}
   ?>
    
    
  </tbody>
</table>
    
<a href="index.php" class="btn btn-dark">Voltar</a>
</div>           
</div>     
</div>  






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>  
    
    
  </body>

</html>