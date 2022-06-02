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
        <form method="post" action="/produto/editar/<?= $params[1] ?>">

        <div class="row g-3">
                <div class="col-md-6">
                    <label class="label-control">Informe o nome:</label>
                    <input class="form-control" name="nome" id="nome" type="text">
                </div>

                <div class="col-md-6">
                    <label class="label-control">Valor:</label>
                    <input class="form-control" name="valor" id="valor" type="number">
                </div>
                <div class="col-12">
                    <label class="label-control">Descrição:</label>
                    <input class="form-control" name="des" id="des" type="text">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col">
                    <button type="submit" class="btn btn-dark">Enviar</button>
                </div>
            </div>

        </form>

        </form>

    </div>
    







</body>

</html>