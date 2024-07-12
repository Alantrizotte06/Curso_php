<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php 
    $nome = "Alan";

    echo "meu nome é $nome"; //Quando utilizamos as aspas duplas é interpretado o conteúdo de dentro da aspas.
    echo "<br></br>";
    echo 'Meu nome é $nome'; // Já quando utilizamos as aspas simples não é interpretado o contéudo de dentro das aspas apenas é exibido como está escrito.
    echo "<br></br>";
    echo 'Meu nome é ' . $nome; // Aqui é um exemplo de aspas simples que é concatenado a variável nome.

    $nom = "Rodrigo";
    $snom = "Nogueira";

    echo "<br></br>";
    echo "$nom \"Minotauro\" $snom"; // Quando utilizamos (\") o interpretdor entende que não é o fechamento de uma string.
  ?>
</body>

</html>