<html>
   <head>
       <link rel="stylesheet" type="text/css" href="http://aula.inf.poa.ifrs.edu.br/~0265136/locadora/csssimples.css">
   </head>
   <body>

<?php

//recuperando dados do formulário
$cadastro = $_GET["cadastro"];
$codigo = $_GET["codigo"];

//abrir a conexão com o banco de dados
$server = "localhost";
$user = "inf2n";
$password = "inf2n";
$link = mysql_connect($server, $user, $password);

//selecionar a base de dados
$base = "inf2n";
mysql_select_db($base, $link);

//$today = date("Y-m-d");

//echo "hoje eh ", $today, " a de entrega eh: ", $date;

//montando um comando de sql:
//$query = "INSERT INTO ronan_cliente (nome, cpf, telefone, endereco, email) VALUES ('$nome', '$cpf', '$telefone', '$endereco', '$email')";
        $statusDeAlugado = 0;
       // $data0 = date("Y-m-d", mktime (0,0,0,0,0,0000));
        
        $dataHoje = date("Y-m-d");
        $atraso = 0;

$divida = mysql_query ("SELECT divida FROM ronan_cliente WHERE cad=$cadastro");
$nome = mysql_query ("SELECT nome FROM ronan_cliente WHERE cad=$cadastro");
$titulo = mysql_query ("SELECT titulo FROM ronan_filme WHERE cod=$codigo");
$status = mysql_query ("SELECT status FROM ronan_filme WHERE cod=$codigo");

while ($row = mysql_fetch_array($divida))
{
    $divida = $row['divida'];
}

while ($row = mysql_fetch_array($nome))
{
    $nome = $row['nome'];
}

while ($row = mysql_fetch_array($titulo))
{
    $titulo = $row['titulo'];
}

while ($row = mysql_fetch_array($status))
{
    $status = $row['status'];
}


if ($divida == 0)
{
    //echo "veio";
  if ($status ==1)
  {
    $locado1 = mysql_query ("SELECT locado1 FROM ronan_cliente WHERE cad=$cadastro");
    while ($row = mysql_fetch_array($locado1)){
    $locado1 = $row['locado1']; }
    $data1 = mysql_query ("SELECT dataDevolucao FROM ronan_filme WHERE cod=$locado1");
    while ($row = mysql_fetch_array($data1)) {
    $data1 = $row['dataDevolucao'];}
    //echo $data1;
    if ($locado1 != 0)
    {   
        if ($data1 < $dataHoje)
        {
            $atraso += 1;
        }
    }
    
    //echo "atraso = ", $atraso;
//---------------------------------
    $locado2 = mysql_query ("SELECT locado2 FROM ronan_cliente WHERE cad=$cadastro");
    while ($row = mysql_fetch_array($locado2)){
    $locado2 = $row['locado2']; }
    $data2 = mysql_query ("SELECT dataDevolucao FROM ronan_filme WHERE cod=$locado2");
    while ($row = mysql_fetch_array($data2)) {
    $data2 = $row['dataDevolucao'];}
    //echo $data2;
    if ($locado2 != 0)
    {   
        if ($data2 < $dataHoje)
        {
            $atraso += 1;
        }
    }
//---------------------------------    
    $locado3 = mysql_query ("SELECT locado3 FROM ronan_cliente WHERE cad=$cadastro");
    while ($row = mysql_fetch_array($locado3)){
    $locado3 = $row['locado3']; }
    $data3 = mysql_query ("SELECT dataDevolucao FROM ronan_filme WHERE cod=$locado3");
    while ($row = mysql_fetch_array($data3)) {
    $data3 = $row['dataDevolucao'];}
    //echo $data3;
    if ($locado3 != 0)
    {   
        if ($data3 < $dataHoje)
        {
            $atraso += 1;
        }
    }
//---------------------------------    
    $locado4 = mysql_query ("SELECT locado4 FROM ronan_cliente WHERE cad=$cadastro");
    while ($row = mysql_fetch_array($locado4)){
    $locado4 = $row['locado4']; }
    $data4 = mysql_query ("SELECT dataDevolucao FROM ronan_filme WHERE cod=$locado4");
    while ($row = mysql_fetch_array($data4)) {
    $data4 = $row['dataDevolucao'];}
    //echo $data4;
    if ($locado4 != 0)
    {   
        if ($data4 < $dataHoje)
        {
            $atraso += 1;
        }
    }
//--------------------------------- 
    
    $locado5 = mysql_query ("SELECT locado5 FROM ronan_cliente WHERE cad=$cadastro");
    while ($row = mysql_fetch_array($locado5)){
    $locado5 = $row['locado5']; }
    $data5 = mysql_query ("SELECT dataDevolucao FROM ronan_filme WHERE cod=$locado5");
    while ($row = mysql_fetch_array($data5)) {
    $data5 = $row['dataDevolucao'];}
    //echo $data5;
    if ($locado5 != 0)
    {   
        if ($data5 < $dataHoje)
        {
            $atraso += 1;
        }
    }
//---------------------------------    
    
    if ($atraso == 0)
    {        

    
            if ($locado1 ==0)
            {
        
                $query1 = "UPDATE ronan_cliente SET locado1 = $codigo WHERE cad = $cadastro";
                $query2 = "UPDATE ronan_filme SET clienteAlugou = $cadastro WHERE cod = $codigo";
                $query3 = "UPDATE ronan_filme SET status = $statusDeAlugado WHERE cod = $codigo";
                
                //$date = date("Y-m-d");
                //echo $date;
                
                //echo $dataDevo;
                $date = mktime (0,0,0,date("m"),date("d")+7,date("Y"));  
                $dataDevo = date("Y-m-d", $date);
                $query4 = "UPDATE ronan_filme SET dataDevolucao = '$dataDevo' WHERE cod = $codigo";
                //echo $dataDevo;
                //echo $query4;
            }
    
            elseif ($locado2 == 0)
            {
                $query1 = "UPDATE ronan_cliente SET locado2 = $codigo WHERE cad = $cadastro";
                $query2 = "UPDATE ronan_filme SET clienteAlugou = $cadastro WHERE cod = $codigo";
                $query3 = "UPDATE ronan_filme SET status = $statusDeAlugado WHERE cod = $codigo";    
    
                $date = mktime (0,0,0,date("m"),date("d")+7,date("Y"));  
                $dataDevo = date("Y-m-d", $date);
                $query4 = "UPDATE ronan_filme SET dataDevolucao = '$dataDevo' WHERE cod = $codigo";
            }
    
            else if ($locado3 == 0)
            {
                $query1 = "UPDATE ronan_cliente SET locado3 = $codigo WHERE cad = $cadastro";
                $query2 = "UPDATE ronan_filme SET clienteAlugou = $cadastro WHERE cod = $codigo";
                $query3 = "UPDATE ronan_filme SET status = $statusDeAlugado WHERE cod = $codigo";    
    
                $date = mktime (0,0,0,date("m"),date("d")+7,date("Y"));  
                $dataDevo = date("Y-m-d", $date);
                $query4 = "UPDATE ronan_filme SET dataDevolucao = '$dataDevo' WHERE cod = $codigo";
            }
    
            else if ($locado4 == 0)
            {
                $query1 = "UPDATE ronan_cliente SET locado4 = $codigo WHERE cad = $cadastro";
                $query2 = "UPDATE ronan_filme SET clienteAlugou = $cadastro WHERE cod = $codigo";
                $query3 = "UPDATE ronan_filme SET status = $statusDeAlugado WHERE cod = $codigo";    
    
                $date = mktime (0,0,0,date("m"),date("d")+7,date("Y"));  
                $dataDevo = date("Y-m-d", $date);
                $query4 = "UPDATE ronan_filme SET dataDevolucao = '$dataDevo' WHERE cod = $codigo";
            }
    
            else if ($locado5 == 0)
            {
                $query1 = "UPDATE ronan_cliente SET locado5 = $codigo WHERE cad = $cadastro";
                $query2 = "UPDATE ronan_filme SET clienteAlugou = $cadastro WHERE cod = $codigo";
                $query3 = "UPDATE ronan_filme SET status = $statusDeAlugado WHERE cod = $codigo";    
    
                $date = mktime (0,0,0,date("m"),date("d")+7,date("Y"));  
                $dataDevo = date("Y-m-d", $date);
                $query4 = "UPDATE ronan_filme SET dataDevolucao = '$dataDevo' WHERE cod = $codigo";
            }

    
    else
        echo "<p>", $nome, " nao pode alugar filmes pois ja tem 5 filmes em seu nome";
        
    }
    else 
        echo "<p>", $nome, " nao pode alugar filmes pois ha ", $atraso, " atraso(s) em seu nome!";
  }
  else
      echo "<p>", "O disco '", $titulo, "' (", $codigo, ") nao esta disponivel!";
}
else
    echo "<p>", $nome, " nao pode alugar filmes enquanto nao pagar sua divida de R$ ", $divida, ",00";


//executar um comando de banco
$result1 = mysql_query ($query1);
$result2 = mysql_query ($query2);
$result3 = mysql_query ($query3);
$result4 = mysql_query ($query4);

//echo $dataDevo;

if (($result1 == 1) && ($result2 == 1) && ($result3 == 1) && ($result4 == 1))
{
echo "<p>", $nome, " (", $cadastro, ") alugou o filme '", $titulo, "' (", $codigo, ") com sucesso!";
echo nl2br("\nA devolucao fica para o dia ");
echo $dataDevo, "</p>";
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