<html>
<body>

<?php
$altura = $_POST[];
$peso = $_POST[];
$imc =  $peso/($altura*$altura);
echo "O imc é $imc--";
    if($imc<18.5)
    echo "Abaixo do peso";
    if($imc >=18.5 && $imc<=24.9) 
    echo "Peso Normal";
    if($imc >=24.9 && $imc<=29.9) 
    echo "Obesidade grau1";
    if($imc >=29.9 && $imc<=39.9) 
    echo "Obesidade grau2";
    if($imc >40.0)
    echo "Obesidade grau3";
?>

</body>

</html>