<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    <div class="topo">
        <h1>Aula Php 06 de Dezembro de 2022</h1>
    </div>

<?php 
   $var = array("Amanda","Arnaldo","Marcíonilia","Dyjayny","Harley","Kelvy","Nadson","Claiviton");
   echo"<br>";
   echo "For: <br>";
  

   echo $var [0];
   echo $var [1];
   echo $var [2];
   echo $var [3];
   echo $var [4];
   echo "<br>";
   echo "<br>";

   for($a=0; $a<count($var); $a++) {
       echo "O vetor possui no indice $a o elemento: $var[$a]<br> ";
   }
   echo "<br> Foreach: <br>";
   foreach ($var as $dado) {
       echo " Os dados do vetor são: $dado <br>";
   }
   echo "<br>";
?> 


<?php 
$var= array("Dyjayny" => 17, "Edward"=> 109, "Crepúsculo"=> 20);
echo "<br>";

echo"As chaves e os valores correspondentes: <br>";
foreach($var as $nome => $idade){
    echo "$nome: $idade<br>";
}
?>

<?php  

$var[0]="Dyjayny";
$var[1]="Silva";
$var[2]="dos Santos";
echo"<br>";
echo"For: <br>";

for($a=0; $a<count($var); $a++){
    echo "$var[$a]<br> ";
}

?>

    
</body>
</html>