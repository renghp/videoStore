<html>
   <head>
       <link rel="stylesheet" type="text/css" href="http://aula.inf.poa.ifrs.edu.br/~0265136/locadora/csssimples.css">
   </head>
   <body>

<?php
$tipo = $_GET["tipodado"];
$cad = $_GET["cad"];
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
  $query = "UPDATE ronan_cliente SET nome = '$nome' WHERE cad = $cad";
  
}
else if ($tipo == "cpf")
{
   $cpf = $_GET["dadoCliente"];
   $query = "UPDATE ronan_cliente SET cpf = $cpf WHERE cad = $cad";

}
else if ($tipo == "telefone")
{
    $tel = $_GET["dadoCliente"];
    $query = "UPDATE ronan_cliente SET telefone = $tel WHERE cad = $cad";

}
else if ($tipo == "endereco")
{
   $end = $_GET["dadoCliente"];
   $query = "UPDATE ronan_cliente SET endereco = '$end' WHERE cad = $cad";
   
}
else if ($tipo == "email")
{
  $email = $_GET["dadoCliente"];
  $query = "UPDATE ronan_cliente SET email = '$email' WHERE cad = $cad";
 
}

else if ($tipo == "divida")
{
  $divida = $_GET["dadoCliente"];
  $query = "UPDATE ronan_cliente SET divida = $divida WHERE cad = $cad";
 
}
else if ($tipo == "locado1")
{
  $loc1 = $_GET["dadoCliente"];
  $query = "UPDATE ronan_cliente SET locado1 = $loc1 WHERE cad = $cad";
 
}
else if ($tipo == "locado2")
{
  $loc2 = $_GET["dadoCliente"];
  $query = "UPDATE ronan_cliente SET locado2 = $loc2 WHERE cad = $cad";
 
}
else if ($tipo == "locado3")
{
  $loc3 = $_GET["dadoCliente"];
  $query = "UPDATE ronan_cliente SET locado3 = $loc3 WHERE cad = $cad";
 
}
else if ($tipo == "locado4")
{
  $loc4 = $_GET["dadoCliente"];
  $query = "UPDATE ronan_cliente SET locado4 = $loc4 WHERE cad = $cad";
 
}
else if ($tipo == "locado5")
{
  $loc5 = $_GET["dadoCliente"];
  $query = "UPDATE ronan_cliente SET locado5 = $loc5 WHERE cad = $cad";
 
}

$result = mysql_query ($query);

if ($result == 1)
{
echo "<p>", "YATTA! </p>";
}

else
   echo "<p>", "You failed me for the last time. </p>";

     
   //echo $nome;
  $query2 = "SELECT * FROM ronan_cliente WHERE cad=$cad";
  $result2 = mysql_query ($query2);
  /* Mostrando os resultados em HTML */
 // echo $cad;
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
  
  while ($line = mysql_fetch_array($result2, MYSQL_ASSOC)){
  echo "\t<tr>\n";
  foreach ($line as $value){
  echo "\t\t<td>$value</td>\n";
  }
  echo "\t</tr>\n";
  }
  echo "</table>\n";
  
  mysql_close($link);
  
  ?>
  
  
       
       </br>
         <form method="get" action="updateCliente.php">
             
             <p>Atualizar Dado do Cliente <input type="number" name="cad" value="<?php echo $cad; ?>" />:</p>
 
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