<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="author" content="Gabriel.Fatec">
    <meta name="prova" content="ps">
    <meta name="keywords" content="html, css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
      <?= date("h:i")?>
      <br>
      <?php
        $valor = 10004.655;
        echo "R$".(number_format($valor,2))
      ?>
      <h2>Funções</h2>

      <?php
        function formatarNumero($numero){
            echo "R$".(number_format($numero,2,',','.'));
        }
        formatarNumero(10003.456);
        echo "<br>";
        formatarNumero(178403.456);
        echo "<br>";

        function retornarNumero($numero){
            echo "R$".(number_format($numero,2,',','.'));
        }

        echo retornarNumero(123125.564);
        $num = retornarNumero(125.564);
        echo "<br>";
        echo $num;
      ?>

  </body>

</html>  
