<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Alterar Cliente</title>
</head>

<body>
    <?php require_once("barra_navegacao.php");?>

    <h1 class="container p-4">Alterar Cliente</h1>
    <div class="container mt-2 p-4 rounded-3 bg-white shadow">
        <form method="post" action="/cliente/editar/<?= $params[1] ?>">

            <div class="row">
                <div class="col-5">
                    <label class="label-control">Informe o nome:</label>
                    <input class="form-control" name="nome" id="nome" value="<?=$resultado["nome"]?>" type="text">
                </div>

                <div class="col-5">
                    <label class="label-control">Informe o email:</label>
                    <input class="form-control" name="email" id="email" value="<?=$resultado["email"]?>" type="text">
                </div>
                <div class="col-2">
                    <label class="label-control">Idade:</label>
                    <input class="form-control" name="idade" id="idade" value="<?=$resultado["idade"]?>"  type="text">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col">
                    <button type="submit" class="btn btn-dark">Alterar</button>
                </div>
            </div>

        </form>

    </div>
    







</body>

</html>