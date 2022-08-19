<?php
use Projeto\Usuario;
require_once "../vendor/autoload.php";
$usuario = new Usuario;
$usuario->setId($_GET['id']);
$dados = $usuario->listarUm();
if (isset($_POST['atualizar'])) {
	$usuario->setNome($_POST['nome']);
	$usuario->setEmail($_POST['email']);
	$usuario->setSenac($_POST['senac']);
    if (empty ($_POST['senha'])) {
		$usuario->setSenha($dados['senha']);
		
	} else {
		$usuario->setSenha($usuario->verificaSenha($_POST['senha'], $dados['senha']));
	}
	$usuario->atualizar();
	header("location:usuarios.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../visualizacoes/bootstrap.css">
    <title>Atualizar Usuário</title>
</head>
<body>
    <section class="row justify-content-center py-4">
    <article class="col-8 bg-white rounded shadow my-1 py-4">
		
		<h2 class="text-center">
		Atualizar Usuário 
		</h2>
				
		<form class="mx-auto w-75" action="" method="post" id="form-inserir" name="form-inserir">

			<div class="mb-3">
				<label class="form-label" for="nome">Nome:</label>
				<input class="form-control" value="<?= $dados['nome']?>"type="text" id="nome" name="nome" required>
			</div>

			<div class="mb-3">
				<label class="form-label" for="email">E-mail:</label>
				<input class="form-control" type="email" id="email" name="email" required>
			</div>

            <div class="mb-3">
				<label class="form-label" for="senha">Senha:</label>
				<input class="form-control" type="password" id="senha" name="senha" placeholder="Preencha apenas se for alterar">
			</div>

			<div class="mb-3">
				<label class="form-label" for="senac">Senac:</label>
				<select class="form-select form-control" name="senac" id="senac" required>
					<?php
                    if ($dados['senac']) {
                   ?>
                   <option value="<?= $dados['senac']?>" selected> <?= $dados['senac']?> </option>
                   <?php
                }
                ?>
                    <option value="penha">Penha</option>
					<option value="tatuape">Tatuapé</option>
					<option value="itaquera">Itaquera</option>
				</select>
			</div>
                <button class="btn btn-success  col" id="atualizar" name="atualizar"><i class="bi bi-save"></i> Atualizar </button>
                <a href="usuarios.php" class="btn btn-outline-danger  col" id="cancelar" name="cancelar"><i class="bi bi-save"></i> Cancelar</a>
		</form>
		
	</article>
    </section>
</body>
</html>