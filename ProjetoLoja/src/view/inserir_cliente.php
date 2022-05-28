<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Inserir Clientes</title>
</head>

<body>
    <?php require_once("barra_navegacao.php");?>

    <h1 class="container p-4">Inserir Clientes</h1>
    <div class="container mt-2 p-4 rounded-3 bg-white shadow">
        <form method="post" action="/cliente/inserir">

            <div class="row">
                <div class="col-5">
                    <label class="label-control">Informe o nome:</label>
                    <input class="form-control" name="nome" id="nome" type="text" placeholder="Nome">
                </div>

                <div class="col-5">
                    <label class="label-control">Informe o email:</label>
                    <input class="form-control" name="email" id="email" type="text" placeholder="email@example.com">
                </div>
                <div class="col-2">
                    <label class="label-control">Idade:</label>
                    <input class="form-control" name="idade" id="idade" type="valor" placeholder="20">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col">
                    <button type="submit" class="btn btn-dark">Enviar</button>
                </div>
            </div>

        </form>

    </div>
    







</body>

</html>