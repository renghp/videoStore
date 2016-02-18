
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="http://aula.inf.poa.ifrs.edu.br/~0265136/locadora/csssimples.css">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        

                       
                 <p><b> Consultar Dados de Cliente: </b></p>
         <form method="get" action="acao/consultCliente.php">
 
           <select name="tipodado">
<option value="nome">Nome</option>
<option value="cadastro">Cadastro</option>
<option value="cpf">CPF</option>
<option value="telefone">Telefone</option>
<option value="endereco">Endereço</option>
<option value="email">Email</option>
</select> 
            <input type="text" name="dadoCliente" /></br>
           <input type="submit" value="Consultar" /></br> 
           
       </form>
           
           
        

           
        <p><b>Consultar Dados de Filme: </b></p>
         <form method="get" action="acao/consultFilme.php">
             
           <select name="tipoDadoFilme">
<option value="titulo">Título</option>
<option value="codigo">Código</option>
<option value="ano" selected>Ano</option>
<option value="genero">Gênero</option>
<option value="diretor">Diretor</option>
<option value="protagonista">Protagonista</option>
</select>
            <input type="text" name="dadoFilme" /></br>
           <input type="submit" value="Consultar" /></br> 
           
       </form>
        
        
        
<a href="http://aula.inf.poa.ifrs.edu.br/~0265136/locadora/funcionario/indexSUPERSECRETO.php"><img src="http://i1313.photobucket.com/albums/t550/renanghp/buttonVoltarFunc_zpsb4c31e9d.png" alt="voltaFunc" height="30" width="150"></a>
    </body>
</html>
