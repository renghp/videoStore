<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="http://aula.inf.poa.ifrs.edu.br/~0265136/locadora/csssimples.css">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        

       
   
        
         <p><b> Locar Filme: </b></p>
         <form method="get" action="acao/rentFilme.php">
           <p>
           Cadastro do Cliente: <input type="number" name="cadastro" /> </br>    
           Código do Filme: <input type="number" name="codigo" step="any" /></br>
           <input type="submit" value="Locar" /></br>    </p>
           
       </form>
         
         
                 <p><b> Devolver Filme: </b></p>
         <form method="get" action="acao/returnFilme.php">
 <p>
           Código do Filme: <input type="number" name="codigoDev" step="any" /></br>
           <input type="submit" value="Devolver" />  </p>  
           
       </form>
                 
            <a href="http://aula.inf.poa.ifrs.edu.br/~0265136/locadora/funcionario/indexSUPERSECRETO.php"><img src="http://i1313.photobucket.com/albums/t550/renanghp/buttonVoltarFunc_zpsb4c31e9d.png" alt="voltaFunc" height="30" width="150"></a>     
    </body>
</html>
