<html>
   <head>
       <link rel="stylesheet" type="text/css" href="http://aula.inf.poa.ifrs.edu.br/~0265136/locadora/csssimples.css">
   </head>
   <body>

<?php

//recuperando dados do formulário
$codigo = $_GET["codigoDev"];

$server = "localhost";
$user = "inf2n";
$password = "inf2n";
$link = mysql_connect($server, $user, $password);

//selecionar a base de dados
$base = "inf2n";
mysql_select_db($base, $link);

$statusDeDisponivel = 1;
$semCliente = 0;
$semFilme = 0;
$dataHoje = date("Y-m-d");
$data0 = "0000-00-00";


//echo $data0;

 
$cad = mysql_query ("SELECT clienteAlugou FROM ronan_filme WHERE cod=$codigo");
$dataDevo = mysql_query ("SELECT dataDevolucao FROM ronan_filme WHERE cod=$codigo");
$status = mysql_query ("SELECT status FROM ronan_filme WHERE cod=$codigo");
$titulo = mysql_query ("SELECT titulo FROM ronan_filme WHERE cod=$codigo");

while ($row = mysql_fetch_array($titulo))
{
    $titulo = $row['titulo'];
}


while ($row = mysql_fetch_array($dataDevo))
{
    $dataDevo = $row['dataDevolucao'];
    //echo $dataDevo;
}
    //echo $dataDevo;

while ($row = mysql_fetch_array($cad))
{
    $cad = $row['clienteAlugou'];
}

while ($row = mysql_fetch_array($status))
{
    $status = $row['status'];
}

$nome = mysql_query ("SELECT nome FROM ronan_cliente WHERE cad=$cad");
$divida = mysql_query ("SELECT divida FROM ronan_cliente WHERE cad=$cad");

while ($row = mysql_fetch_array($nome))
{
    $nome = $row['nome'];
}

while ($row = mysql_fetch_array($divida))
{
    $divida = $row['divida'];
}
//abrir a conexão com o banco de dados


if ($status == 0)
{
    
    $locado1 = mysql_query ("SELECT locado1 FROM ronan_cliente WHERE cad=$cad");
    while ($row = mysql_fetch_array($locado1)){
    $locado1 = $row['locado1']; }
        
    $locado2 = mysql_query ("SELECT locado2 FROM ronan_cliente WHERE cad=$cad");
    while ($row = mysql_fetch_array($locado2)){
    $locado2 = $row['locado2']; }
    
    $locado3 = mysql_query ("SELECT locado3 FROM ronan_cliente WHERE cad=$cad");
    while ($row = mysql_fetch_array($locado3)){
    $locado3 = $row['locado3']; }
    
    $locado4 = mysql_query ("SELECT locado4 FROM ronan_cliente WHERE cad=$cad");
    while ($row = mysql_fetch_array($locado4)){
    $locado4 = $row['locado4']; }
    
    $locado5 = mysql_query ("SELECT locado5 FROM ronan_cliente WHERE cad=$cad");
    while ($row = mysql_fetch_array($locado5)){
    $locado5 = $row['locado5']; }
    
    
    if ($codigo == $locado1)
    {
        $query4 = "UPDATE ronan_cliente SET locado1 = $semFilme WHERE cad = $cad";
    }
    
    else if ($codigo == $locado2)
    {
        $query4 = "UPDATE ronan_cliente SET locado2 = $semFilme WHERE cad = $cad";
    }
    
    else if ($codigo == $locado3)
    {
        $query4 = "UPDATE ronan_cliente SET locado3 = $semFilme WHERE cad = $cad";
    }
    
    else if ($codigo == $locado4)
    {
        $query4 = "UPDATE ronan_cliente SET locado4 = $semFilme WHERE cad = $cad";
    }
    
    else if ($codigo == $locado5)
    {
        $query4 = "UPDATE ronan_cliente SET locado5 = $semFilme WHERE cad = $cad";
    }
        
    
    if ($dataDevo < $dataHoje)
    {   
        
        $divida += 2*(ceil((((strtotime($dataHoje) - strtotime($dataDevo))/3600)/24)));
        //echo $divida;
        
        $query1 = "UPDATE ronan_filme SET dataDevolucao = $data0 WHERE cod = $codigo";
        $query2 = "UPDATE ronan_filme SET status = $statusDeDisponivel WHERE cod = $codigo";
        $query3 = "UPDATE ronan_filme SET clienteAlugou = $semCliente WHERE cod = $codigo";
        $query5 = "UPDATE ronan_cliente SET divida = $divida WHERE cad = $cad";
        
        echo "<p>", $nome, " (", $cad, ") devolveu o filme ", $titulo, " (", $codigo, ") com sucesso, porem atrasado! Sua divida atual eh de R$ ", $divida, ",00";
        //echo "divida!";
    }
    else
    {
        $query1 = "UPDATE ronan_filme SET dataDevolucao = $data0 WHERE cod = $codigo";
        $query2 = "UPDATE ronan_filme SET status = $statusDeDisponivel WHERE cod = $codigo";
        $query3 = "UPDATE ronan_filme SET clienteAlugou = $semCliente WHERE cod = $codigo";
        

        echo "<p>", $nome, " (", $cad, ") devolveu o filme ", $titulo, " (", $codigo, ") com sucesso e sem atraso! Sua divida atual eh de R$ ", $divida, ",00";
    }

}

else 
    echo "<p>Esse filme esta disponivel, logo nao pode ser devolvido!";




$result1 = mysql_query ($query1);
$result2 = mysql_query ($query2);
$result3 = mysql_query ($query3);
$result4 = mysql_query ($query4);
$result5 = mysql_query ($query5);

if (($result1 == 1) && ($result2 == 1) && ($result3 == 1) && ($result4 == 1))
{
    echo nl2br("\nAll in a day's work!</p>");
}

else
   echo nl2br("\nOcorreu algum erro.</p>");

//Fechando a conexão
mysql_close($link);


?>
       </br>
    <a href="http://aula.inf.poa.ifrs.edu.br/~0265136/locadora/funcionario/indexSUPERSECRETO.php"><img src="http://i1313.photobucket.com/albums/t550/renanghp/buttonVoltarFunc_zpsb4c31e9d.png" alt="voltaFunc" height="30" width="150"></a>   
</body>
</html>
