<html>
   <head>
       <link rel="stylesheet" type="text/css" href="http://aula.inf.poa.ifrs.edu.br/~0265136/locadora/csssimples.css">
   </head>
   <body>

<?php
$tipo = $_GET["tipoDadoFilme"];
$cod = $_GET["cod"];
//echo "say something";
//echo $tipo;

//abrir a conexão com o banco de dados
$server = "localhost";
$user = "inf2n";
$password = "inf2n";
$link = mysql_connect($server, $user, $password);

//selecionar a base de dados
$base = "inf2n";
mysql_select_db($base, $link);


if ($tipo == "titulo")
{   
  $titulo = $_GET["dadoFilme"];
  $query = "UPDATE ronan_filme SET titulo = '$titulo' WHERE cod = $cod";
  
}
else if ($tipo == "ano")
{
   $ano = $_GET["dadoFilme"];
   if (($ano < 1890) || ($ano > 2050))
           echo "Insira um ano valido!";
   else
       $query = "UPDATE ronan_filme SET ano = $ano WHERE cod = $cod";

}
else if ($tipo == "genero")
{
  $genero = $_GET["dadoFilme"];
  $query = "UPDATE ronan_filme SET genero = '$genero' WHERE cod = $cod";

}
else if ($tipo == "diretor")
{
  $diretor = $_GET["dadoFilme"];
  $query = "UPDATE ronan_filme SET diretor = '$diretor' WHERE cod = $cod";
   
}
else if ($tipo == "protagonista")
{
  $protagonista = $_GET["dadoFilme"];
  $query = "UPDATE ronan_filme SET protagonista = '$protagonista' WHERE cod = $cod";
 
}

else if ($tipo == "status")
{
  $status = $_GET["dadoFilme"];
  if (($status!=1) && ($status!=0))
      echo "Insira um status valido! (1 = Disponivel, 0 = Locado)";
  else
      $query = "UPDATE ronan_filme SET status = $status WHERE cod = $cod";
 
}
else if ($tipo == "dataDevolucao")
{
  $dataDevolucao = $_GET["dadoFilme"];
  $query = "UPDATE ronan_filme SET dataDevolucao = '$dataDevolucao' WHERE cod = $cod";
 
}
else if ($tipo == "notaIMDb")
{
  $notaIMDb = $_GET["dadoFilme"];
  if (($notaIMDb < 0) || ($notaIMDb > 10))
      echo "Insira uma Nota valida! (Entre 0 e 10)";
  else
      $query = "UPDATE ronan_filme SET notaIMDb = $notaIMDb WHERE cod = $cod";
 
}
else if ($tipo == "clienteAlugou")
{
  $clienteAlugou = $_GET["dadoFilme"];
  if ($clienteAlugou < 1)
      echo "Insira um numero valido de Cliente!";
  else
      $query = "UPDATE ronan_filme SET clienteAlugou = $clienteAlugou WHERE cod = $cod";
 
}



$result = mysql_query ($query);

if ($result == 1)
{
echo "<p>", "YATTA! </p>";
}

else
   echo "<p>", "You failed me for the last time.</p>";






$query2 = "SELECT * FROM ronan_filme WHERE cod=$cod";
  $result2 = mysql_query($query2);
  /* Mostrando os resultados em HTML */
  echo "<table border='1'>\n
  <tr>
  <th>Codigo</th>
  <th>Titulo</th>
  <th>Ano</th>
  <th>Genero</th>
  <th>Diretor</th>
  <th>Protagonista</th>
  <th>Status</th>
  <th>Data de Devolucao</th>
  <th>Nota do IMDb</th>
  <th>Cliente</th>
  
  </tr>";
  
  while ($line = mysql_fetch_array($result2, MYSQL_ASSOC)){
  echo "\t<tr>\n";
  foreach ($line as $value){
  echo "\t\t<td>$value</td>\n";
  }
  echo "\t</tr>\n";
  }
  echo "</table>\n";



//Fechando a conexão
mysql_close($link);


?>
       
       </br>
         <form method="get" action="updateFilme.php">
             
             <p>Atualizar Dado do Filme <input type="number" name="cod" value="<?php echo $cod; ?>" />:</p>
 
           <select name="tipoDadoFilme">
<option value="titulo">Titulo</option>
<option value="ano">Ano</option>
<option value="genero">Genero</option>
<option value="diretor">Diretor</option>
<option value="protagonista">Protagonista</option>
<option value="status">Status</option>
<option value="dataDevolucao">Data de Devolucao</option>
<option value="notaIMDb">Nota do IMDb</option>
<option value="clienteAlugou">Cliente</option>
</select>: 
            <input type="text" name="dadoFilme" /></br>
            
           <input type="submit" value="Atualizar" /></br> 
           
       </form>

    <a href="http://aula.inf.poa.ifrs.edu.br/~0265136/locadora/funcionario/indexSUPERSECRETO.php"><img src="http://i1313.photobucket.com/albums/t550/renanghp/buttonVoltarFunc_zpsb4c31e9d.png" alt="voltaFunc" height="30" width="150"></a>   
</body>
</html>