<html>
   <head>
       <link rel="stylesheet" type="text/css" href="http://aula.inf.poa.ifrs.edu.br/~0265136/locadora/csssimples.css">
   </head>
   <body>

<?php

//recuperando dados do formulário
//$cod = $_GET["cod"];
$titulo = $_GET["titulo"];
$ano = $_GET["ano"];
$genero = $_GET["genero"];
$diretor = $_GET["diretor"];
$protagonista = $_GET["protagonista"];
$notaIMDb = $_GET["notaIMDb"];


//abrir a conexão com o banco de dados
$server = "localhost";
$user = "inf2n";
$password = "inf2n";
$link = mysql_connect($server, $user, $password);

//selecionar a base de dados
$base = "inf2n";
mysql_select_db($base, $link);

//montando um comando de sql:
$query = "INSERT INTO ronan_filme (titulo, ano, genero, diretor, protagonista, status, dataDevolucao, notaIMDb, clienteAlugou) VALUES ('$titulo', '$ano', '$genero', '$diretor', '$protagonista', 1, 0000-00-00, '$notaIMDb', 0)";

//executar um comando de banco
$result = mysql_query ($query);

if ($result == 1)
   echo "<p>Eureka!</p>";
else
   echo "<p>System Failure System Failure System Failure</p>";

//Fechando a conexão
mysql_close($link);

?>
       </br>
       <a href="http://aula.inf.poa.ifrs.edu.br/~0265136/locadora/funcionario/indexSUPERSECRETO.php"><img src="http://i1313.photobucket.com/albums/t550/renanghp/buttonVoltarFunc_zpsb4c31e9d.png" alt="voltaFunc" height="30" width="150"></a>
</body>
</html>