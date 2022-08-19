<?php
use Projeto\Usuario;
require_once "../vendor/autoload.php";
$usuario = new Usuario;
$listaDeUsuarios = $usuario->listar();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../visualizacoes/bootstrap.css">
    <title>Usuários</title>
</head>
<body>

    <section class="row text-center justify-content-center py-4">
        <article class="col-8 bg-white rounded shadow my-1 py-4">
            <h2 class="text-center">
            Usuários <span class="badge bg-secondary"><?=count($listaDeUsuarios)?></span></h2>

            <p><i class="bi bi-save"></i><a class="btn btn-success" href="usuario-insere.php">Inserir novo usuário</a></p>

            <table class="table table-hover">
                <thead>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Senac</th>
                    <th>Ações</th>
                    <th></th>
                </thead>
                <tbody>
                <?php foreach($listaDeUsuarios as $usuario){    
				?>
                    <tr>
                        <td><?=$usuario['nome']?></td>
                        <td><?=$usuario['email']?></td>
                        <td><?=$usuario['senac']?></td>
                        <td><a href="usuario-atualiza.php?id=<?=$usuario['id']?>" class="btn btn-primary">Update</a></td>
                        <td><a href="usuario-exclui.php?id=<?=$usuario['id']?>" class="btn btn-danger excluir" onclick="excluir()">Delete</a></td>
                    </tr>

                <?php
                }
                ?>
                </tbody>
            </table>
        </article >

    </section>
<script src="../visualizacoes/bootstrap.bundle.js"></script>
<script src="./js/confirm.js"></script>
</body>
</html>