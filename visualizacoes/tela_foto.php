<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Anuncie seu livro para troca ou doação">
  <meta name="keywords" content="Anunciar livro, postar livro">
  <title>Livro Solto - Anunciar livro</title>
  <link rel="shortcut icon" href="../imagens/logo-e-favicon/favicon-16x16.png" type="image/x-icon">
  <link rel="stylesheet" href="bootstrap.css">
  <link rel="stylesheet" href="estilo.css">
<?php
  require_once "../inc/cabecalho-geral.php";
?>
<main class="main-anuncio justify-content-center p-3">
<div class="container div-anuncio">
  <div>
    <div class="py-5 text-center">
      <div class="border-shadow img-vazia container"><img src="../imagens/aguardando-imagem.png" id="img"
        alt="" class="img-vaziaa d-block mx-auto mb-3" width="140" height="170"></div>
      <!-- <img class="d-block mx-auto mb-4" src="/docs/5.2/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
      <h2>Postagem de livro</h2>
      <p class="lead">Insira as informações do livro que será carregado e anunciado para possíveis doações ou trocas</p>
    </div>

    <div class="row g-5">
    <div class="col-md-5 col-lg-4 order-md-last">
  
      </div>
      <div class="col-md-12 col-lg-12 text-center">
        <form class="needs-validation" novalidate>
          <div class="row g-3 mx-auto">
            <div class="col-sm-12 col-md-6">
              <label for="firstName" class="form-label title">Título</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-md-6">
              <label for="country" class="form-label categoria">Categoria</label>
              <select class="form-select" id="country" required>
                <option value=""></option>
                <option value="">Romance</option>
                <option value="">Terror</option>
                <option value="">Fantasia</option>
                <option value="">Ficção</option>
                <option value="">Filosofia</option>
                <option value="">Tecnologia</option>
                <option value="">Saúde</option>
                <option value="">Linguagem</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>

            
          <hr class="my-4">

          


          
          </div>
         
            <label for="formFile" class="form-label">Escolha um arquivo de imagem para envio</label>
          <div class="mb-3 text-center envio-de-arquivo">
            <input class="form-control"type="file" accept="image/*" id="upload">
          </div>
          <div class="enviar-foto form-signin mb-5"><a href="loginvalida.php"><button class="mt-4 btn button-foto" type="button">Enviar</button></a></div>
        </form>
      </div>
    </div>
  </div>
</main>
<?php
require_once "../inc/rodape-geral.php"

?>

</body>

</html>