<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pecuária Brasil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
      
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <img src="https://www.pecuariabrasilassessoria.com.br/img/logo_3.png" width="150px" class="px-2" alt="">
            <a class="navbar-brand px-1" href="#" style="color: white;">Cadastro</a>
            <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" style="color: white;" aria-current="page" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: white;" href="?page=cadastro">Cadastrar animal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: white;" href="?page=listar">Listar Animais</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <?php
                    include("./config.php");
                    switch (@$_REQUEST["page"]) {
                        case "cadastro":
                            include("./cadastro-animal.php");
                            break;
                        case "listar":
                            include("./listar-animais.php");
                            break;
                        case "salvar":
                            include("./salvar-animal.php");
                            break;
                        case "editar":
                            include("./editar-animal.php");
                            break;
                        case "pesar":
                            include("./pesagem-animal.php");
                            break;
                        case "listar-pesagens":
                            include("./listar-pesagens.php");
                            break;
                        case "salvar-pesagem":
                            include("./salvar-pesagem.php");
                            break;
                        case "editar-pesagem":
                            include("./editar-pesagem.php");
                            break;
                        default:
                            echo "<h1>Bem vindo(a) ao sistema</h1>";
                    }
                ?>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>