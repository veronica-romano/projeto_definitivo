<?php
use Projeto\Usuario;
require_once "../vendor/autoload.php";

if (isset($_POST['inserir'])) {
	$usuario = new Usuario;
	$usuario->setNome($_POST['nome']);
	$usuario->setEmail($_POST['email']);
    $usuario->setSenha($_POST['senha']);
    $usuario->setSenac($_POST['senac']);
	$usuario->inserir();
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
    <title>Inserir Usuário</title>
</head>
<body>
    <section class="row justify-content-center py-4">
    <article class="col-8 bg-white rounded shadow my-1 py-4">
		
		<h2 class="text-center">
		Inserir novo usuário
		</h2>
				
		<form class="mx-auto w-75" action="" method="post" id="form-inserir" name="form-inserir">

			<div class="mb-3">
				<label class="form-label" for="nome">Nome:</label>
				<input class="form-control" type="text" id="nome" name="nome" required>
			</div>

			<div class="mb-3">
				<label class="form-label" for="email">E-mail:</label>
				<input class="form-control" type="email" id="email" name="email" required>
			</div>

			<div class="mb-3">
				<label class="form-label" for="senha">Senha:</label>
				<input class="form-control" type="password" id="senha" name="senha" required>
			</div>

			<div class="mb-3">
				<label class="form-label" for="senac">Senac:</label>
				<select class="form-select form-control" name="senac" id="senac" required>
					<option value=""></option>
                    <option value="penha">Penha</option>
					<option value="tatuape">Tatuapé</option>
					<option value="itaquera">Itaquera</option>
				</select>
			</div>
                <button class="btn btn-success  col" id="inserir" name="inserir"><i class="bi bi-save"></i> Inserir Usuário</button>
                <a href="usuarios.php" class="btn btn-outline-danger  col" id="cancelar" name="cancelar"><i class="bi bi-save"></i> Cancelar</a>
		</form>
		
	</article>
    </section>
</body>
</html>