<html>
   <head>
       <link rel="stylesheet" type="text/css" href="http://aula.inf.poa.ifrs.edu.br/~0265136/locadora/csssimples.css">
   </head>
   <body>

<?php
$tipo = $_GET["tipodado"];
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


if ($tipo == "nome")
{   
   
  $nome = $_GET["dadoCliente"];
  
  $cad = mysql_query ("SELECT cad FROM ronan_cliente WHERE nome='$nome'");
  while ($row = mysql_fetch_array($cad))
    {$cad = $row['cad'];}
    
    //echo $cad;

  
   //echo $nome;
  $query = "SELECT * FROM ronan_cliente WHERE nome='$nome'";
  $result = mysql_query($query);
  /* Mostrando os resultados em HTML */
  echo "<table border='1'>\n
  <tr>
  <th>Cadastro</th>
  <th>Nome</th>
  <th>CPF</th>
  <th>Telefone</th>
  <th>Endereco</th>
  <th>E-mail</th>
  <th>Divida (R$)</th>
  <th>Loc1</th>
  <th>Loc2</th>
  <th>Loc3</th>
  <th>Loc4</th>
  <th>Loc5</th>
  
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
else if ($tipo == "cadastro")
{
    
  $cad = $_GET["dadoCliente"];
   //echo $nome;
  $query = "SELECT * FROM ronan_cliente WHERE cad=$cad";
  $result = mysql_query($query);
  /* Mostrando os resultados em HTML */
  echo "<table border='1'>\n
  <tr>
  <th>Cadastro</th>
  <th>Nome</th>
  <th>CPF</th>
  <th>Telefone</th>
  <th>Endereco</th>
  <th>E-mail</th>
  <th>Divida (R$)</th>
  <th>Loc1</th>
  <th>Loc2</th>
  <th>Loc3</th>
  <th>Loc4</th>
  <th>Loc5</th>
  
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
else if ($tipo == "cpf")
{
   $cpf = $_GET["dadoCliente"];
   //echo $nome;
   
     $cad = mysql_query ("SELECT cad FROM ronan_cliente WHERE cpf=$cpf");
  while ($row = mysql_fetch_array($cad))
    {$cad = $row['cad'];}
    
    
  $query = "SELECT * FROM ronan_cliente WHERE cpf=$cpf";
  $result = mysql_query($query);
  /* Mostrando os resultados em HTML */
  echo "<table border='1'>\n
  <tr>
  <th>Cadastro</th>
  <th>Nome</th>
  <th>CPF</th>
  <th>Telefone</th>
  <th>Endereco</th>
  <th>E-mail</th>
  <th>Divida (R$)</th>
  <th>Loc1</th>
  <th>Loc2</th>
  <th>Loc3</th>
  <th>Loc4</th>
  <th>Loc5</th>
  
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
else if ($tipo == "telefone")
{
    $tel = $_GET["dadoCliente"];
   //echo $nome;
    
    
     $cad = mysql_query ("SELECT cad FROM ronan_cliente WHERE telefone=$tel");
  while ($row = mysql_fetch_array($cad))
    {$cad = $row['cad'];}
    
    
    
  $query = "SELECT * FROM ronan_cliente WHERE telefone=$tel";
  $result = mysql_query($query);
  /* Mostrando os resultados em HTML */
  echo "<table border='1'>\n
  <tr>
  <th>Cadastro</th>
  <th>Nome</th>
  <th>CPF</th>
  <th>Telefone</th>
  <th>Endereco</th>
  <th>E-mail</th>
  <th>Divida (R$)</th>
  <th>Loc1</th>
  <th>Loc2</th>
  <th>Loc3</th>
  <th>Loc4</th>
  <th>Loc5</th>
  
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
else if ($tipo == "endereco")
{
   $end = $_GET["dadoCliente"];
   //echo $nome;
   
     $cad = mysql_query ("SELECT cad FROM ronan_cliente WHERE endereco='$end'");
  while ($row = mysql_fetch_array($cad))
    {$cad = $row['cad'];}
    
    
  $query = "SELECT * FROM ronan_cliente WHERE endereco='$end'";
  $result = mysql_query($query);
  /* Mostrando os resultados em HTML */
  echo "<table border='1'>\n
  <tr>
  <th>Cadastro</th>
  <th>Nome</th>
  <th>CPF</th>
  <th>Telefone</th>
  <th>Endereco</th>
  <th>E-mail</th>
  <th>Divida (R$)</th>
  <th>Loc1</th>
  <th>Loc2</th>
  <th>Loc3</th>
  <th>Loc4</th>
  <th>Loc5</th>
  
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
else if ($tipo == "email")
{
  $email = $_GET["dadoCliente"];
   //echo $nome;
  
     $cad = mysql_query ("SELECT cad FROM ronan_cliente WHERE email='$email'");
  while ($row = mysql_fetch_array($cad))
    {$cad = $row['cad'];}
    
    
  $query = "SELECT * FROM ronan_cliente WHERE email='$email'";
  $result = mysql_query($query);
  /* Mostrando os resultados em HTML */
  echo "<table border='1'>\n
  <tr>
  <th>Cadastro</th>
  <th>Nome</th>
  <th>CPF</th>
  <th>Telefone</th>
  <th>Endereco</th>
  <th>E-mail</th>
  <th>Divida (R$)</th>
  <th>Loc1</th>
  <th>Loc2</th>
  <th>Loc3</th>
  <th>Loc4</th>
  <th>Loc5</th>
  
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
         <form method="get" action="updateCliente.php">
             
            <p> Atualizar Dado do Cliente <input type="number" name="cad" value="<?php echo $cad; ?>" />:</p>
 
           <select name="tipodado">
<option value="nome">Nome</option>
<option value="cpf">CPF</option>
<option value="telefone">Telefone</option>
<option value="endereco">Endereco</option>
<option value="email">Email</option>
<option value="divida">Divida</option>
<option value="locado1">Locado1</option>
<option value="locado2">Locado2</option>
<option value="locado3">Locado3</option>
<option value="locado4">Locado4</option>
<option value="locado5">Locado5</option>
</select>: 
            <input type="text" name="dadoCliente" /></br>
            
           <input type="submit" value="Atualizar" /></br> 
           
       </form>

    <a href="http://aula.inf.poa.ifrs.edu.br/~0265136/locadora/funcionario/indexSUPERSECRETO.php"><img src="http://i1313.photobucket.com/albums/t550/renanghp/buttonVoltarFunc_zpsb4c31e9d.png" alt="voltaFunc" height="30" width="150"></a>   
</body>
</html>