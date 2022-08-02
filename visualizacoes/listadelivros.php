<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Livros disponíveis para você agora">
    <meta name="keywords" content="livro, selecionar livro, leitura">
    <title>Livro Solto - Livros Disponíveis</title>
    <link rel="shortcut icon" href="imagens/logo-e-favicon/favicon-16x16.png" type="image/x-icon">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="estilo.css">
</head>
    <style>
        .col-3{
    text-align: center;
}
    </style>
<body>
  <header>
    <nav class="navbar navbar-expand-md text-center ">
        <div class="container mxe-md-5">
            <h1><a class="navbar-brand pt-2" href="index.php"><img
                        src="../imagens/logo-e-favicon/Logo-sem-fundo-2.png"
                        alt="Letra L com bordas arredondas seguida de Livro Solto, indicando o logo do site"
                        width="80px"></a></h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse row justify-content-md-end justify-content-sm-center justify-content-center"
                id="navbarSupportedContent">
                <div class="col-4">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 hamb">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php"
                                alt="Página inicial">Início</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php" alt="Link para equipe">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php" alt="Link para equipe">Cadastro</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>

    <div class="mt-4 ms-3"><form action="">
        <label for="filtrar" class="filtrar">Filtrar</label>
        <select name="filtrar" id="" class="select-livros">
          <option></option>
          <option>Romance</option>
          <option>Terror</option>
          <option>Fantasia</option>
          <option>Ficção</option>
          <option>Filosofia</option>
          <option>Tecnologia</option>
          <option>Saúde</option>
          <option>Linguagem</option>
        </select>
    </form></div>
    <main class="p-3">
      <section class="linhaUm row mb-5 mt-5">
          <div class="col-3"><figure><img src="../imagens/livros/game-of-thrones.jpg" alt="livro game-of-thrones"><figcaption>Game of thrones Volume 1</figcaption></figure></div>
      </section>

    <section class="linhaUm">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </section>
      
    </main>

    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4 item justify-content-md-center">
                        <h4>Links</h4>
                        <ul>
                            <li class="mb-2"><a href="index.php" alt="Início">Início</a></li>
                            <li class="mb-2"><a href="login.php" alt="Entrar na conta">Login</a></li>
                            <li class="mb-2"><a href="cadastro.php" alt="Cadastrar uma conta">Cadastro</a></li>
                        </ul>
                    </div>
                    
                    <div class="col-sm-12 col-md-6 col-lg-4 item text">
                        <h4>Sobre o Livro Solto</h4>
                        <p>A Livro Solto é uma iniciativa sem fins lucrativos, que visa apenas influenciar positivamente
                            a comunidade a nossa volta com o incentivo ao contato com a leitura.
                        </p>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-4 item social">
                    <ul class="d-flex justify-content-center gap-3">
                        <li><a href="https://www.instagram.com/livrosoltooficial/" alt="link para instagram"><img src="../imagens/redes-sociais/instagram.png" alt="logo do instagram" width="40"></a></li>
                        <li><img src="../imagens/redes-sociais/facebook.png" alt="" width="40"></li>
                    </ul></div>
                </div>
                <p class="copyright">Livro Solto © 2022</p>
            </div>
        </footer>
    </div>
    

    <script src="bootstrap.bundle.js"></script>
    <script src="nosso.js"></script>
</body>

</html>