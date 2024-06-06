<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP</title>
</head>

<body>
  <h1>Exemplo PHP</h1>
  <?php
    //Caso não seja definido a zona do tempo da sua região será definido por padrão a do servidor PHP.
    date_default_timezone_set("America/Sao_Paulo");//Estamos utilizando está linha para configurar a zona do tempo para a região em que se localizamos que seria a GMT-3.
    echo "Hoje é dia " . date("d/M/Y");//Utilizamos o d minusculo para se referir ao dia do mês, e D maiusculo para se referir o dia da semana.
    echo "<br>E a hora é ". date("G:i:s") . "</br>";//Utilizamos o G maiusculo para definir a hora.
  ?>
</body>

</html>