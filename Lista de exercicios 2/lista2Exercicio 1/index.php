<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Exercicio 1</title>
  </head>
  <body>
      <form action="resposta.php" method="post">
        <?php
            for ($i=1; $i <= 10; $i++){
        ?>
        <label for="num<?= $i ?>">Digite um valor <?= $i ?></label>
                
        <input type="number" id="num<?= $i ?>" name="num<?= $i ?>">
        <?php
            }
        ?>

        <button type="submit">enviar</button>

      </form>
    
  </body>
</html>
