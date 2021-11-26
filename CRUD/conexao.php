<?php
$hostname = "localhost";
$user = "root";
$password ="password";
$database ="cadastro";

$mysqli = new mysqli($hostname,$user,$password,$database);
if ($mysqli->connect_errno){
 echo "Falha ao conectar: ("  .$mysqli->connect_errno.") ". $mysqli->connect_errno;
}else
echo "conectado";
function mensagem($texto,$tipo)
 { echo "<div class='alert alert-$tipo' role= 'alert'>
  $texto
</div>";
 }

 function mostra_data($data){
  $d = explode('-', $data);
  $escreve= $d[2] ."/" .$d[1]."/".$d[0];
  return $escreve;
 }

?>