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
<form style="background-color:antiquewhite" class="form" method="get" action="cadaluno.php">
 <p> EDITAR DADOS</p>
    
 <p> cpf: <input type="text" name="cpf"  value= <?php echo $_GET['cpf']?> /> </p>
 <p> nome: <input type="text" name="nome" value=<?php echo $_GET['nome']?>/> </p>
 <p> endereço: <input type="text" name="endereco" value= <?php echo $_GET['endereco']?> /> </p>
 <p> email: <input type="text" name="email"  value=<?php echo $_GET['email']?>/> </p>
 <p> telefone: <input type="text" name="telefone"  value=<?php echo $_GET['telefone']?> /> </p>
 <p> estado civil:<input type="text" name="estadocivil"  value=<?php echo $_GET['estadocivil']?> />
     </p>



 <input TYPE="hidden" NAME="form_submit" VALUE="OK">

 <br><br>
 <button type="submit" class="btn">
 <b>Salvar Dados</b>
 </button>
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