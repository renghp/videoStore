<html>
   <head>
       <link rel="stylesheet" type="text/css" href="http://aula.inf.poa.ifrs.edu.br/~0265136/locadora/csssimples.css">
   </head>
   <body>

<?php
$login = $_GET["login"];
$senha = $_GET["senha"];
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

  $senhacerta= mysql_query ("SELECT senha FROM ronan_login WHERE login='$login'");
  while ($row = mysql_fetch_array($senhacerta))
    {$senhacerta = $row['senha'];}

    
if ($senha == $senhacerta)
{  
    Header("Location: indexSUPERSECRETO.php");
        //echo '<meta http-equiv="refresh" content="0; url=" />';
}

else 
    echo "<p>Senha ou Login Incorretos!</p>";
    
    
    
    
      mysql_close($link);
    
    
    ?>
    
      <a href="http://aula.inf.poa.ifrs.edu.br/~0265136/locadora/funcionario"><img src="http://i1313.photobucket.com/albums/t550/renanghp/buttonVoltarFunc_zpsb4c31e9d.png" alt="voltaFunc" height="30" width="150"></a>
        
 
        
        
       

    </body>
</html>