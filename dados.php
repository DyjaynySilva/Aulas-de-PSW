<?php
 error_reporting(E_ALL);
 ini_set("display_errors", 1);
 include_once ("header.php");
 if( !empty($_POST['form_submit']) ) {
 obterDados($_POST);
 }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Formulario</title>
</head>
<body>
    <div class="container"> 
    <form style="background-color:antiquewhite" class="form" method="get" action="editar.php">
     <table>
         <tr>
            <th>Nome</th>
            <th>Cpf</th>
            <th>Endereço</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Estado Civil</th>
            <th>Ação</th>
         </tr>

         <tr>
            <td> <?php echo $_GET['nome']?> </td>
            <td> <?php echo $_GET['cpf']?> </td>
            <td> <?php echo $_GET['endereco']?> </td>
            <td> <?php echo $_GET['telefone']?> </td>
            <td> <?php echo $_GET['email']?> </td>
            <td> <?php echo $_GET['estadocivil']?> </td>
            <td>
            
            

                <form method="get" action= "editar.php"> 
                

                    <input type="hidden" name="cpf" value= <?php echo $_GET['cpf']?>>
                    <input type="hidden" name="nome" value=<?php echo $_GET['nome']?>>
                    <input type="hidden" name="endereco" value= <?php echo $_GET['endereco']?>>
                    <input type="hidden" name="telefone" value=<?php echo $_GET['telefone']?>>
                    <input type="hidden" name="email" value= <?php echo $_GET['email']?>>
                    <input type="hidden" name="estadocivil" value=<?php echo $_GET['estadocivil']?>>


                    <button type="submit" class="btn">  
                        <b>Editar Dados</b> 
                    </button> 

                </form>
       

            
            </td>
         </tr>
         
         

     </table>

     
     

     
    
     </div>

    
</body>
</html>
<?php
 error_reporting(E_ALL);
 ini_set("display_errors", 1);
 include_once ("footer.php");
 if( !empty($_POST['form_submit']) ) {
 obterDados($_POST);
 }
?>