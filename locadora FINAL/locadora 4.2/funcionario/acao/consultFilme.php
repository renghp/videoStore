<html>
   <head>
       <link rel="stylesheet" type="text/css" href="http://aula.inf.poa.ifrs.edu.br/~0265136/locadora/csssimples.css">
   </head>
   <body>

<?php
$tipo = $_GET["tipoDadoFilme"];
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
  
  $cod = mysql_query ("SELECT cod FROM ronan_filme WHERE titulo='$titulo'");
  while ($row = mysql_fetch_array($cod))
    {$cod = $row['cod'];}
    
    //echo $cad;

  
   //echo $nome;
  $query = "SELECT * FROM ronan_filme WHERE titulo='$titulo'";
  $result = mysql_query($query);
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
  
  while ($line = mysql_fetch_array($result, MYSQL_ASSOC)){
  echo "\t<tr>\n";
  foreach ($line as $value){
  echo "\t\t<td>$value</td>\n";
  }
  echo "\t</tr>\n";
  }
  echo "</table>\n";

 
    
    //echo "nome";
}
else if ($tipo == "codigo")
{
    
  $cod = $_GET["dadoFilme"];
   //echo $nome;
  $query = "SELECT * FROM ronan_filme WHERE cod=$cod";
  $result = mysql_query($query);
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
  
  while ($line = mysql_fetch_array($result, MYSQL_ASSOC)){
  echo "\t<tr>\n";
  foreach ($line as $value){
  echo "\t\t<td>$value</td>\n";
  }
  echo "\t</tr>\n";
  }
  echo "</table>\n";

 

   // echo "cad";
}
else if ($tipo == "ano")
{
   
   
  $ano = $_GET["dadoFilme"];
  
  $cod = mysql_query ("SELECT cod FROM ronan_filme WHERE ano=$ano");
  while ($row = mysql_fetch_array($cod))
    {$cod = $row['cod'];}
    
    //echo $cad;

  
   //echo $nome;
  $query = "SELECT * FROM ronan_filme WHERE ano=$ano";
  $result = mysql_query($query);
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
  
  while ($line = mysql_fetch_array($result, MYSQL_ASSOC)){
  echo "\t<tr>\n";
  foreach ($line as $value){
  echo "\t\t<td>$value</td>\n";
  }
  echo "\t</tr>\n";
  }
  echo "</table>\n";

 
    
}
else if ($tipo == "genero")
{
  
  $genero = $_GET["dadoFilme"];
  
  $cod = mysql_query ("SELECT cod FROM ronan_filme WHERE genero='$genero'");
  while ($row = mysql_fetch_array($cod))
    {$cod = $row['cod'];}
    
    //echo $cad;

  
   //echo $nome;
  $query = "SELECT * FROM ronan_filme WHERE genero='$genero'";
  $result = mysql_query($query);
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
  
  while ($line = mysql_fetch_array($result, MYSQL_ASSOC)){
  echo "\t<tr>\n";
  foreach ($line as $value){
  echo "\t\t<td>$value</td>\n";
  }
  echo "\t</tr>\n";
  }
  echo "</table>\n";

 
}
else if ($tipo == "diretor")
{
     
  $diretor = $_GET["dadoFilme"];
  
  $cod = mysql_query ("SELECT cod FROM ronan_filme WHERE diretor='$diretor'");
  while ($row = mysql_fetch_array($cod))
    {$cod = $row['cod'];}
    
    //echo $cad;

  
   //echo $nome;
  $query = "SELECT * FROM ronan_filme WHERE diretor='$diretor'";
  $result = mysql_query($query);
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
  
  while ($line = mysql_fetch_array($result, MYSQL_ASSOC)){
  echo "\t<tr>\n";
  foreach ($line as $value){
  echo "\t\t<td>$value</td>\n";
  }
  echo "\t</tr>\n";
  }
  echo "</table>\n";

 
}
else if ($tipo == "protagonista")
{
     
  $protagonista = $_GET["dadoFilme"];
  
  $cod = mysql_query ("SELECT cod FROM ronan_filme WHERE protagonista='$protagonista'");
  while ($row = mysql_fetch_array($cod))
    {$cod = $row['cod'];}
    
    //echo $cad;

  
   //echo $nome;
  $query = "SELECT * FROM ronan_filme WHERE protagonista='$protagonista'";
  $result = mysql_query($query);
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
  
  while ($line = mysql_fetch_array($result, MYSQL_ASSOC)){
  echo "\t<tr>\n";
  foreach ($line as $value){
  echo "\t\t<td>$value</td>\n";
  }
  echo "\t</tr>\n";
  }
  echo "</table>\n";

 
}


//montando um comando de sql:
//$query = "INSERT INTO ronan_cliente (nome, cpf, telefone, endereco, email) VALUES ('$nome', '$cpf', '$telefone', '$endereco', '$email')";

//executar um comando de banco
//$result = mysql_query ($query);

/*
if ($result == 1)
{
echo "YATTA! ";
}

else
   echo "You failed me for the last time.";
*/
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