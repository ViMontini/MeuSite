<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Site Pessoal</title>
    <!-- Inclua os links para os arquivos Bootstrap CSS e JavaScript aqui -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<body style="background-color:293241">
    <header >
        <nav  class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">Vitor</a> <!-- Movido para o canto esquerdo -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav"> <!-- Movido para o canto direito -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Início</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sobre Mim</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Portfólio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contato</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section class="jumbotron text-center">
        <div class="container">
            <h1>Olá, eu sou [Seu Nome]</h1>
            <p>Bem-vindo ao meu site pessoal</p>
        </div>
    </section>

    <section class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="border p-5 text-center ">
                    <!-- Aqui você pode adicionar sua imagem quando estiver pronto -->
                    <!-- <img src="caminho-para-sua-imagem.jpg" alt="Sua Imagem" class="img-fluid"> -->
                </div>
            </div>
            <div class="col-md-6">
                <h2>Sobre Mim</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam hendrerit justo at odio bibendum, non efficitur ligula bibendum.</p>
            </div>
        </div>
    </section>

    <footer class="bg-light text-center py-3 fixed-bottom">
        <p>&copy; 2023 Meu Site Pessoal</p>
    </footer>
</body>
</html>
