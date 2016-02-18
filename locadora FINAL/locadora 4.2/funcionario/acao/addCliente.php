<html>
   <head>
       <link rel="stylesheet" type="text/css" href="http://aula.inf.poa.ifrs.edu.br/~0265136/locadora/csssimples.css">
   </head>
   <body>

<?php

//recuperando dados do formulário
$nome = $_GET["nome"];
$cpf = $_GET["cpf"];
$telefone = $_GET["telefone"];
$endereco = $_GET["endereco"];
$email = $_GET["email"];

//abrir a conexão com o banco de dados
$server = "localhost";
$user = "inf2n";
$password = "inf2n";
$link = mysql_connect($server, $user, $password);

//selecionar a base de dados
$base = "inf2n";
mysql_select_db($base, $link);

//montando um comando de sql:
$query = "INSERT INTO ronan_cliente (nome, cpf, telefone, endereco, email) VALUES ('$nome', '$cpf', '$telefone', '$endereco', '$email')";

//executar um comando de banco
$result = mysql_query ($query);

if ($result == 1)
{
echo "<p>YATTA! </p>";
}

else
   echo "<p>You failed me for the last time.</p>";

//Fechando a conexão
mysql_close($link);

?>
       </br>
    <a href="http://aula.inf.poa.ifrs.edu.br/~0265136/locadora/funcionario/indexSUPERSECRETO.php"><img src="http://i1313.photobucket.com/albums/t550/renanghp/buttonVoltarFunc_zpsb4c31e9d.png" alt="voltaFunc" height="30" width="150"></a>   
</body>
</html>