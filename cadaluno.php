
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
<form style="background-color:antiquewhite" class="form" method="get" action="dados.php">
 <p> CADASTRO</p>
    
 <p> cpf: <input type="text" name="cpf" placeholder="Digite seu CPF" /> </p>
 <p> nome: <input type="text" name="nome" placeholder="Digite seu nome"  /> </p>
 <p> endereço: <input type="text" name="endereco"  placeholder="Digite o endereço"  /> </p>
 <p> email: <input type="text" name="email"  placeholder="Digite seu Email" /> </p>
 <p> telefone: <input type="text" name="telefone" placeholder="Digite seu Telefone"  /> </p>
 <p> estado civil:
     <select name="estadocivil" id="solteiro">
        <option value="solteiro">Solteiro(a)</option>
        <option value="casado">Casado(a)</option>

     </select></p>



 <input TYPE="hidden" NAME="form_submit" VALUE="OK">

 <br><br>
 <button type="submit" class="btn">
 <b>Visualizar Dados</b>
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