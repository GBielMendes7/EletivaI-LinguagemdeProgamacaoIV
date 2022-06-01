<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Clientes</title>
</head>

<body>
    <?php require_once "barra_navegacao.php";?>
    <h1 class="container p-4">Clientes</h1>
    <div class="container mt-2 p-4 rounded-3 bg-white shadow">

        <?php 
            if(isset($resposta)){
                if ($resposta){
                    echo '<div class="alert alert-success" role="alert">
                            Registro inserido com sucesso.
                        </div>';
                }else{
                    echo '<div class="alert alert-danger alert-dismiss Fade show" role="alert">
                    Erro ao inserir.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                }
            }
           
        ?>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php while($linha = $resultado->fetch(PDO::FETCH_ASSOC)){ ?>
                <tr>
                    <th scope="row"><?=$linha['id']?></th>
                    <td><?=$linha['nome']?></td>
                    <td><?=$linha['email']?></td>
                    <td><a href="/cliente/alterar/<?= $linha['id']?>" class="btn btn-dark">Alterar</a>
                    <a href="/cliente/excluir/<?= $linha['id']?>" class="btn btn-outline-danger">Excluir</a></td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>







</body>

</html>